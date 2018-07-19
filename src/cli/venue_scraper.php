<?php

define('DB_NAME','tickets');
define('DB_USER','slim');
define('DB_PASS','slim');
define('DB_CHARSET','utf8'); 
define('DB_PORT', 3306); 
define('DB_HOST', 'localhost'); 

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET;
$opt = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];

$db = new PDO($dsn, DB_USER, DB_PASS, $opt);

//$url = 'https://www.ticketmaster.com/The-Fillmore-Silver-Spring-presented-by-tickets-Silver-Spring/venue/172548';

$url = $argv[1];

$venue = array(

	'name' 			=> 'NULL',
	'image_small' 	=> 'NULL',
	'image_big'		=> 'NULL',
	'address' 		=> 'NULL',
	'details'		=> 'NULL',
	'tm_id' 		=> 'NULL',
	'tm_api_id' 	=> 'NULL'

);

preg_match('#\.com/(.+?)-tickets.+?/venue#', $url, $ok);

if (isset($ok[1]))
	$n = $ok[1];

$json = file_get_contents('https://app.ticketmaster.com/discovery/v2/venues.json?apikey=UFLwi7xSA3Qt7rmEJzEycCAlOG1Nrxll&keyword='.$n);

$json = @json_decode($json, 1);

if (!isset($json['_embedded']['venues'][0]))
	die ('stopping in oder not to fill db with possible trash');

$v = $json['_embedded']['venues'][0];
$t = $json['_embedded']['venues'][0]['url'];

preg_match('#venue%2F([0-9]+)#i', $t, $ok);

if (isset($v['id'])) $venue['tm_api_id'] = $v['id'];
if (isset($v['name'])) $venue['name'] = $v['name'];
if (isset($ok[1])) $venue['tm_id'] = $ok[1];
if (isset($v['images'][1]['url'])) $venue['image_small'] = $v['images'][1]['url'];
if (isset($v['images'][0]['url'])) $venue['image_big'] = $v['images'][0]['url'];
if (isset($v['address']['line1']) and isset($v['city']['name']) and isset($v['state']['stateCode']) and isset($v['country']['countryCode'])) $venue['address'] = $v['address']['line1'].', '.$v['city']['name'].', '.$v['state']['stateCode'].', '.$v['country']['countryCode'];
if (isset($v['boxOfficeInfo'])) $venue['details'] = json_encode($v['boxOfficeInfo']);

$q = "SELECT id FROM `venues` WHERE `tm_id` = :tm_id LIMIT 50";

$stmt = $db->prepare($q); 
$stmt -> execute([':tm_id' => $venue['tm_id']]);
		
$res = $stmt -> fetchAll();

if (count($res)<1)
{
	$q = "INSERT INTO `venues` (`name`, `image_small`, `image_big`, `address`, `details`, `tm_id`, `tm_api_id`)
	VALUES (:name, :image_small, :image_big, :address, :details, :tm_id, :tm_api_id);";

} else {

	$q = "	UPDATE `venues` SET
		`name` = :name,
		`image_small` = :image_small,
		`image_big` = :image_big,
		`address` = :address,
		`details` = :details,
		`tm_api_id` = :tm_api_id
		WHERE `tm_id` = :tm_id";

}

$stmt = $db->prepare($q);
$stmt -> execute([':name' => $venue['name'], ':image_small' => $venue['image_small'], ':image_big' => $venue['image_big'], ':address' => $venue['address'], ':details' => $venue['details'], ':tm_id' => $venue['tm_id'], ':tm_api_id' => $venue['tm_api_id']]);





/*

$regex = array(

	'name' => '<span itemprop="name">(.+?)</span>',
	'address' => '<div class="h5" itemprop="address"(.+?)</div>',
	'tm_id' => '<link rel="canonical" href="https://www.ticketmaster.com/Emerald-Queen-Casino-tickets-Tacoma/venue/(.+?)" />',
	'image' => '<img itemprop="photo" src="(.+?)"  width="205"  height="115"',
	'details' => '<div class="neutral-block" id="venueDetailDiv">.+?</div>'
);



$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
var_dump($result);

die;

$html = file_get_contents($url);

echo 'sdf';

foreach ($regex as $k => $v) {
	preg_match("#$v#", $html, $ok);
	echo $k;
	print_r($ok);
}*/
