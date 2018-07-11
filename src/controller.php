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

	// 2DO : add pagination

	public function search($s)
	{
		$content = $this -> db -> search($s);

		print_r($content);
	}

	public function staticPage($page_file)
	{
		$content = file_get_contents($page_file);

		$this->twig->display('static_page.html.twig', array('content' => $content));
	}

	public function homePage()
	{		 

		$model = $this -> db -> homePage();

		/*echo '<pre>';
		print_r($model);
		echo '</pre>';
		die;*/		

		//shuffle($model['comments']);

		//$model['comments'] = array_slice($model['comments'], 0,10);

		$this->twig->display('home.html.twig', array('comments' => $model['comments'], 'artists' => $model['artists']));
		
		return;
	}

	public function catPage($id, $page)
	{	
		if ($page == null)
			$page = 0;

		$model = $this -> db -> catPage($id, $page);

		$content = $model['sql_res'];

		if (count($content)<1) {
			$this->app->show404();
			return;
		}

		/*echo '<pre>';
		print_r($content);
		echo '</pre>';
		die;*/

		// first 'next' page starts with #2 
		if ($page == 0)
			$page = 1;

		$this->twig->display('cat.html.twig', array('category' => $content, 'next_page' => $model['next_page'], 'curr_page' => $page, 'cat_id' => $id));
	}

	public function itemPage($id, $artist_name)
	{	

		$content = $this -> db -> itemPage($id);
		
		/*echo '<pre>';
		print_r($content);
		echo '</pre>';
		die;*/

		if ($this->app->checkFor404($content, $artist_name))
			return;

		$this->twig->display('artist.html.twig', array('artist' => $content));
		
		return;
	}

}



?>