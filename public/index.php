<?php

/**

2DO
- найти всех артистов, которые отдают 404 из-за названия, пофиксить
	[
		- сервер воспринимает урлы с точками как файлы (Big-K.R.I.T). нужна fx в twig, кот. позволит sanitize урлы внутри href
	]

- venue (т.е. локация выступлений) - отдельная страница?
	- в бд нужно помечать venue это или нет, чтоб по venue дергать правильную урлу по апи
- все css, js на внешних ресурсах скачать к себе

- АПИ с ticketmaster, чтоб реально показывать билеты
	- https://developer.ticketmaster.com/api-explorer/
	[
		- собрать venue отдельно и по ним данные. id и адрес. билета потом дергать 
			- нужен скрипт, который положит все данные в кеш первый раз
	]

*/


namespace App;

use \Dice\Dice;
use \Router;

if (!file_exists(__DIR__.'/../src/config.php'))
	die('No config file. Rename and edit /src/config-sample.php');

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

// artist page

Router::route('/([0-9]+)/([^/]+)', function($id, $artist_name) use($controller){

	$controller -> itemPage($id, $artist_name);

});

Router::route('/feedbackpost', function() use($controller){

	$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	print_r($_POST);
});

// gallery page
/*([a-fA-F0-9-]{36}*/

Router::route('/gallery/([0-9]+)', function($artist_id) use($controller){

	$controller -> gallery($artist_id);
	//echo '<center><img src="http://photos-eu.bazaarvoice.com/photo/2/cGhvdG86dGlja2V0bWFzdGVy/'.$image_id.'"></center>';

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