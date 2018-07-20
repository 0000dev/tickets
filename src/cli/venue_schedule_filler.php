<?php

// 2DO - include config с доступам в бд, чтоб они были в однон месте

/*error_reporting(E_ALL);
ini_set('display_errors', TRUE);*/

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

$tm_url = 'https://app.ticketmaster.com/discovery/v2/events.json?apikey=7elxdku9GGG5k8j0Xm8KWdANDgecHMV0&venueId=';


$q = 'SELECT 

	venues.id,
	venues.tm_api_id,

	venues_schedule.data,
	venues_schedule.last_updated

	from venues

	left join venues_schedule on (venues.id = venues_schedule.venues_id)

	/*where 
	venues_schedule.data is NULL and where
	update_trigger is not NULL*/
';

$stmt = $db->prepare($q);
$stmt -> execute();
$res = $stmt -> fetchAll();

foreach ($res as $v) {
	
	$arr = array();

	$json = file_get_contents($tm_url.$v['tm_api_id']);
	$json = json_decode($json,1);

	foreach ($json['_embedded']['events'] as $z) {

		$arr[] = [
		'name' 				=>	$z['name'],
		'url' 				=>	$z['url'], // tm_url
		'image' 			=>	$z['images'][0]['url'],
		'date' 				=>	$z['dates']['start']['localDate'],
		'genre'	=>	$z['classifications'][0]['genre']['name'],
		'info' 				=>	$z['info'],
		'price' =>	[
			'min' 		=>	$z['priceRanges'][0]['min'],
			'max' 		=>	$z['priceRanges'][0]['max'],
			'currency' 	=>	$z['priceRanges'][0]['currency']
					],
		'seatmap' 			=>	$z['seatmap']['staticUrl']
		];

		if (count($arr)>=10)
			break;
	}

	// checking if data is already inside
	$q = 'SELECT id from venues_schedule where venues_id = :venues_id';

	$stmt = $db->prepare($q);
	$stmt -> execute([':venues_id' => $v['id']]);
			
	$res = $stmt -> fetchAll();

	/*print_r($res);
	die;*/

	if (count($res)<1)
	{
		$q = "INSERT into venues_schedule (venues_id, data) values (:venues_id, :data)";

		$stmt = $db->prepare($q);
		$stmt -> execute([':venues_id' => $v['id'], ':data' => json_encode($arr)]);
	} else {

		$q = "UPDATE venues_schedule set data = :data where venues_id = :venues_id";
		$stmt = $db->prepare($q);
		$stmt -> execute([':venues_id' => $v['id'], ':data' => json_encode($arr)]);
	}

}





/*
$artists_id = 890;
$name = 'Maroon-5';

$data = file_get_contents('https://app.ticketmaster.com/discovery/v2/events.json?apikey=UFLwi7xSA3Qt7rmEJzEycCAlOG1Nrxll&keyword='.$name);

$data = json_decode($data, 1);

$arr = array();

foreach ($data['_embedded']['events'] as $z) {

	$arr[] =

		[
		'name' => $z['name'],
		'when' => array(
			'date' => $z['dates']['start']['localDate'],
			'time' => $z['dates']['start']['localTime']
		),
		'venue' => array(
			'name' => $z['_embedded']['venues'][0]['name'],
			'state' => $z['_embedded']['venues'][0]['state']['stateCode'],
			'city' => $z['_embedded']['venues'][0]['city']['name'],
			'country' => $z['_embedded']['venues'][0]['country']['countryCode']
			)
		];
		
}

// checking if data is already inside

$q = 'SELECT id from schedule where artists_id = :artists_id';

$stmt = $db->prepare($q); // stmt = statement
$stmt -> execute([':artists_id' => $artists_id]);
		
$res = $stmt -> fetchAll();

if (count($res)<1)
{
	$q = "INSERT into schedule (artists_id, data) values (:artists_id, :data)";

	$stmt = $db->prepare($q);
	$stmt -> execute([':artists_id' => $artists_id, ':data' => json_encode($arr)]);
} else {

	$q = "UPDATE schedule set data = :data where artists_id = :artists_id";
	$stmt = $db->prepare($q);
	$stmt -> execute([':artists_id' => $artists_id, ':data' => json_encode($arr)]);
}*/