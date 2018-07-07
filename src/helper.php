<?php

namespace App\Helper;

use \Twig_Loader_Filesystem;
use \Twig_Environment;

/**
 * 
 */
class Helper
{
	
	function __construct()
	{
		# code...
	}

	public function showExecutionTime()
	{
		echo '<!--' . (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) . '-->';

		return;
	}

	public function devPanel()
	{
		echo "<div style=\"position: fixed; bottom: 0; padding: 10px; background-color: #19283be6; color: white;\">".(round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 4))." sec | ".(round(memory_get_usage(true)/1024/1024, 4))." mb</div>"; 
		return;
	}

	public function loadTwig() 
	{
	    
	    $loader = new Twig_Loader_Filesystem(
	        array (
	          	TWIG_VIEWS_FOLDER
	        )
	    );
	    
	    // set up environment
	    $params = array(
	        'cache' => TWIG_CACHE_FOLDER, 
	        'auto_reload' => TWIG_AUTO_RELOAD, // disable cache
	        'autoescape' => TWIG_AUTOESCAPE
	    );

	    return new Twig_Environment($loader, $params);
	}

	public function show404($domain = '', $addToDB = false)
	{ 

		//if ($addToDB === true)
	    	//$this -> send_search_request($domain);

	    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
	    echo '<h1>Not Found</h1> <p>The requested URL was not found on this server.</p>';
	    //file_put_contents('/home/admin/web/engine.files/public_html/404errors.txt', $domain."\n", FILE_APPEND | LOCK_EX);
	      
	    //header("HTTP/1.1 301 Moved Permanently"); 
		//header("Location: /");

		return;       
	}

	public function checkFor404(array $content, $name)
	{	

		/*echo str_replace('-', ' ', $name);
		echo $content['name'];*/

		if (!isset($content['name']) or strpos($content['name'], str_replace('-', ' ', $name)) === false)
			$this->show404();

		return;
	}
}