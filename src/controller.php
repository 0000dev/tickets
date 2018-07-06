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

		// fetching smth from db:
		$content = $this -> db -> homePage(803);

		//print_r($content);

		$this->twig->display('home.html.twig', array('artist' => $content));
		return;
	}

	public function itemPage()
	{		

		echo 'item page'; 
			
		// fetching smth from db:
		//$z['list'] = $this -> db -> homePage();
		//print_r($z);

		//$this -> loadView('appHomePage',$z);

		return;
	}

}



?>