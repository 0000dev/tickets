<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

define('ENV','dev');

define('DB_NAME','tickets');
define('DB_USER','slim');
define('DB_PASS','slim');
define('DB_CHARSET','utf8'); 
define('DB_PORT', 3306); 
define('DB_HOST', 'localhost'); 

define('TWIG_VIEWS_FOLDER', __DIR__.'/views');
define('TWIG_CACHE_FOLDER', __DIR__.'/../cache');
define('TWIG_AUTO_RELOAD', true); // disable cache
define('TWIG_AUTOESCAPE', true);

define('STATIC_PAGES_CONTENT_FOLDER', __DIR__.'/pages');

define('CATEGORY_ITEMS_PER_PAGE', 10);

define('POSTPONED_COMMENT_PUBLISH', true);
define('COMMENTS_START_PUBLISH_DATE', '2018-06-20');
define('PUBLISH_ONE_COMMENT_EACH_DAYS', 3); 
define('MAX_COMMENTS_PER_PAGE', 100);

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

global $url;
$url = (isset($_GET['___url'])?$_GET['___url']:$_SERVER['REQUEST_URI']);
$url = filter_var($url, FILTER_SANITIZE_URL);

//$route =  array_filter(explode('/', filter_var($url, FILTER_SANITIZE_URL)));