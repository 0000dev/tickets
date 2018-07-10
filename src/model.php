<?php

namespace App\Model;

use \PDO;

class Model 
{	

	protected $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET;
	protected $opt = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];

	protected $db;

	public function __construct()
	{
		$this->db = new PDO($this->dsn, DB_USER, DB_PASS, $this->opt);
	}

	public function search($s, $page=0)
	{
		$sql_query = '

			SELECT
				
				artists.id,
				artists.name,
				artists.image,
				artists.description

			from artists
			
			where
			MATCH (artists.name) AGAINST (:s IN NATURAL LANGUAGE MODE)

			limit '.(CATEGORY_ITEMS_PER_PAGE+1).'
			offset '.($page*CATEGORY_ITEMS_PER_PAGE).'
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute([':s' => $s]);
		
		$sql_res = $stmt -> fetchAll();

		$next_page = false;
 
		if (count($sql_res)>CATEGORY_ITEMS_PER_PAGE)
			$next_page = true;

		return array('sql_res' => $sql_res, 'next_page' => $next_page);
	}

	public function homePage() {

		$result = array();

		$sql_query = '

			SELECT

				comments.text as text,
				comments.title as title,
				comments.rating as rating,
				comments.author as author,

				comment_details.details as details,

				artists.id as artists_id,
				artists.name as artists_name

			from comments 

			join artists ON (artists.id = comments.artists_id)
			join comment_details ON (comment_details.id = comments.comment_details_id)	
			
			where
			comments.artists_id > '.rand(1,800).' 

			limit 10
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();

		$result['comments'] = $sql_res = $stmt -> fetchAll();

		$sql_query = '

			SELECT
				
				artists.id,
				artists.name

			from artists
			
			limit 5			
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		$result['artists'] = $sql_res;

		return $result;
	}

	public function catPage($id, $page) {

		$sql_query = '

			SELECT
				
				artists.id,
				artists.name,
				artists.image,
				artists.description,

				categories_names.name as cats,
				categories_names.id as cats_id

			from artists

			left join categories ON (artists.id = categories.artists_id)
			left join categories_names ON (categories_names.id = categories.categories_names_id)
			
			where
			categories.categories_names_id = '.$id.' 

			limit '.(CATEGORY_ITEMS_PER_PAGE+1).'
			offset '.($page*CATEGORY_ITEMS_PER_PAGE).'
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		$next_page = false;
 
		if (count($sql_res)>CATEGORY_ITEMS_PER_PAGE)
			$next_page = true;

		return array('sql_res' => $sql_res, 'next_page' => $next_page);

	}

	public function itemPage($id) {

		// artist data

		$sql_query = '

			SELECT
				
				artists.id,
				artists.name,
				artists.image,
				artists.description,

				images.image as images,

				categories_names.name as cats,
				categories_names.id as cats_id

			from artists

			left join images on (artists.id = images.artists_id)

			left join categories ON (artists.id = categories.artists_id)
			left join categories_names ON (categories_names.id = categories.categories_names_id)
			
			where
			artists.id = '.$id.'
		';

		$stmt = $this->db->prepare($sql_query); 
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		// flattering results
		foreach ($sql_res as $tmp) {
			foreach ($tmp as $tmp_key => $tmp_value) {
				if (!isset($res[$tmp_key]))
					$res[$tmp_key] = $tmp_value;
				else {
					if (is_array($res[$tmp_key]))
					{
						if (!in_array($tmp_value, $res[$tmp_key]))
							$res[$tmp_key][] = $tmp_value;
					} else {
						if ($res[$tmp_key] != $tmp_value)
						{
							$res[$tmp_key] = array($res[$tmp_key]);
							$res[$tmp_key][] = $tmp_value;
						}
					}
				}
			}
		}

		// neighboring artists by id

		$sql_query = '

			(SELECT id,name from artists where id > '.$id.' limit 1)
			UNION
			(SELECT id,name from artists where id = (select max(id) from artists where id < '.$id.'))
		';

		$stmt = $this->db->prepare($sql_query);
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		$res['neighbors'] = array();

		foreach ($sql_res as $key => $value) {
			$res['neighbors'][] = array('name'=>$value['name'], 'id'=>$value['id']);
		}

		// comments

		$sql_query = '

			SELECT

				comments.text as text,
				comments.title as title,
				comments.rating as rating,
				comments.author as author,

				comment_details.details as details

			from comments 

			join comment_details ON (comment_details.id = comments.comment_details_id)	
			
			where
			comments.artists_id = '.$id.' limit 100
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$res['comments'] = $stmt -> fetchAll();

		return $res;

		/*if (count($res['comment_text'])>0) {
			$comments = array();
			foreach ($res['comment_text'] as $key => $value) {
				$comments[$key]['text'] = $value;
				$comments[$key]['title'] = isset($res['comment_title'][$key])? $res['comment_title'][$key] : NULL;
				$comments[$key]['details'] = isset($res['comment_details'][$key])? $res['comment_details'][$key] : NULL;
				$comments[$key]['rating'] = isset($res['comment_rating'][$key])? $res['comment_rating'][$key] : NULL;
			}

			unset($res['comment_text'], $res['comment_title'], $res['comment_details'], $res['comment_rating']);

			$res['comments'] = $comments;
		}*/

	}

}

  
