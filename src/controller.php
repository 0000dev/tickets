<?php

namespace App\Controller;

use \App\Model\Model;
use \App\Helper\Helper;

class Controller
{	

	public $db;
	public $app;
	public $twig;

	public function __construct(Model $db, Helper $app) 
	{
		$this -> db = $db; 
		$this -> app = $app;
		$this -> twig = $app -> loadTwig();

	}

	public function homePage()
	{		 

		$this->twig->display('home.html.twig', array('artist' => $content));
		
		return;
	}

	public function itemPage($id, $artist_name)
	{	

		$content = $this -> db -> itemPage($id);
		
		/*print_r($content);
		die;*/

		$this->app->checkFor404($content, $artist_name);

		$this->twig->display('artist.html.twig', array('artist' => $content));
		
		return;
	}

}



?>