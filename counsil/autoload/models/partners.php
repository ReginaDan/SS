<?php
	namespace models;
	
	class partners{
		
		static function getPartners(){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, name, photo, link 
							  FROM partners");

		}
		static function getPartner($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, name, photo, link 
							  FROM partners p
							  WHERE p.id=?",(int)$id)[0];

		}
		
		static function postChangePartner($id, $name, $link, $photo, $error, $prev_photo)
		{
			
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
			\F3::get('DB')->exec("UPDATE partners SET name=:name, photo=:photo, link=:link WHERE id=:id",
				array(
						"name"=>$name,
						"photo"=>$photoForChange,
						"link"=>$link,
						"id"=>$id
						));
		}
		
		static function deletePartner($id){
		return(\F3::get('DB')->exec("DELETE FROM partners WHERE id='$id'"));
		}
		
		static function postPartner($name, $link, $photo, $error)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				\F3::get('DB')->exec("INSERT INTO partners (name, photo, link) VALUES (:name, :photo, :link)",array(
						"name"=>$name,
						"photo"=>$photo,
						"link"=>$link
					)); 
			}
			else 
				return;
		}




		
	}