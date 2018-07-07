<?php

namespace App;

use \Dice\Dice;
use \Router;

require_once __DIR__.'/../vendor/autoload.php';

// Dice = autowiring 
$dice 		= new Dice;
$controller = $dice->create('\App\Controller\Controller');
$helper 	= $dice->create('\App\Helper\Helper');

/**
* Router
*/

Router::route('/', function() use($controller){

	$controller -> homePage($id, $artist_name);

});

Router::route('/([0-9]+)/(.+)', function($id, $artist_name) use($controller){

	$controller -> itemPage($id, $artist_name);

});

if (false === Router::execute($url)) 
	echo '404';


if (ENV == 'dev')
	$helper->devPanel();
else 
	$helper->showExecutionTime();