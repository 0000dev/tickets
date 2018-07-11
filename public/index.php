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

	$controller -> homePage();

});

Router::route('/([0-9]+)/([^/]+)', function($id, $artist_name) use($controller){

	$controller -> itemPage($id, $artist_name);

});

Router::route('/([0-9]+)/img/([a-fA-F0-9-]{36})', function($id, $image_id) use($controller){

	//$controller -> itemPage($id, $artist_name);
	echo '<center><img src="http://photos-eu.bazaarvoice.com/photo/2/cGhvdG86dGlja2V0bWFzdGVy/'.$image_id.'"></center>';

});

Router::route('/category/([0-9]+)(|/[0-9]+)', function($cat_id, $page) use($controller){

	if ($page != null)
		$page = str_replace('/', '', $page);

	$controller -> catPage($cat_id, $page);

});

Router::route('/page/([-a-z0-9]+)', function($page_file) use($controller){

	$page = STATIC_PAGES_CONTENT_FOLDER.'/'.$page_file.'.txt';

	if (file_exists($page))
		$controller -> staticPage($page);

});


Router::route('/search', function() use($controller){

	$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	//print_r($_POST);
	//echo 'search page';
	$controller -> search($_POST['search']);

});



if (false === Router::execute($url)) 
	echo '404';


if (ENV == 'dev')
	$helper->devPanel();
else 
	$helper->showExecutionTime();