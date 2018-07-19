<?php

// 2DO - include config с доступам в бд, чтоб они были в однон месте

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
}