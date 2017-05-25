<?php
	namespace models;
	
	class news{
					
		static function getNews(){
			$db = \F3::get('DB');
			return $db->exec("SELECT n.id nid, n.name nname, n.date_created ndate_created, n.picture npict, n.text ntext, n.author author
							  FROM news n 
							  ORDER BY ndate_created DESC
							  LIMIT 5");

		}
		static function getNewsAll(){
			$db = \F3::get('DB');
			return $db->exec("SELECT n.id nid, n.name nname, n.date_created ndate_created, n.picture npict, n.text ntext, n.author author
							  FROM news n 
							  ORDER BY ndate_created DESC");

		}

		static function getNewsOffset($offset){
			$db = \F3::get('DB');
			return \F3::get('DB')->exec("SELECT n.id nid, n.name nname, n.date_created ndate_created, n.picture npict, n.text ntext, n.author author
							  FROM news n 
							  ORDER BY ndate_created DESC
							  LIMIT 5 OFFSET $offset ");
		}
		static function getNewsDetail($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT n.id, n.name nname, n.date_created ndate_created, n.picture npict, n.text ntext, n.author author
							  FROM news n 
							  WHERE n.id='$id'");

		}
				static function getSameNews(){
			$db = \F3::get('DB');
			return $db->exec("SELECT n.id nid, n.name nname, n.date_created ndate_created, n.text ntext
							  FROM news n 
							  ORDER BY ndate_created DESC
							  LIMIT 3");

		}
		
		static function postChangeNew($id, $name, $text, $author, $picture, $error, $prev_picture)
		{
			$date=date("Y-m-d");
			$pictureForChange = $prev_picture;
						if(move_uploaded_file($error, 'ui/images/'.$picture))  
						var_dump($text);
							$pictureForChange = $picture;
			\F3::get('DB')->exec("UPDATE news SET name=:name, text =:text, picture=:picture, author=:author, date_created=:date_update  WHERE id = :id",
			array(
						"name"=>$name,
						"text"=>$text,
						"picture"=>$picture,
						"author"=>$author,
						"id"=>$id,
						"date_update" => $date
				));
		}
		
		static function postNew($name, $text, $author, $picture, $error)
		{
			$date=date("Y-m-d");
			if(move_uploaded_file($error, 'ui/images/'.$picture)){ 
				\F3::get('DB')->exec("INSERT INTO news (name, text, picture, author, date_created) VALUES (:name, :text, :picture, :author, :date_created)",array(
						"name"=>$name,
						"text"=>$text,
						"picture"=>$picture,
						"author"=>$author,
						"date_created"=>$date
						
					)); 
			}
			else 
				return;
		}

		static function deleteNew($id){
		return(\F3::get('DB')->exec("DELETE FROM news WHERE id='$id'"));
		}

		
	}