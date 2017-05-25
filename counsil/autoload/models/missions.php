<?php
	namespace models;
	
	class missions{
		
		static function getMissions(){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, name, picture FROM missions");

		}
		
		static function getMission($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, name, picture 
							  FROM missions m
							  WHERE m.id=?",(int)$id)[0];

		}
		
		static function postChangeMission($id,$name,$picture,$error,$prev_picture)
		{
			
			$pictureForChange = $prev_picture;
			if(move_uploaded_file($error, 'ui/images/'.$picture))
				$pictureForChange = $picture;
			\F3::get('DB')->exec("UPDATE missions SET name = :name, picture=:picture WHERE id = :id",
				array(
						"name"=>$name,
						"picture"=>$pictureForChange,
						"id"=>$id
						));
		}
		
		static function deleteMission($id){
		return(\F3::get('DB')->exec("DELETE FROM missions WHERE id='$id'"));
		}
	
		static function postMission($name,$picture,$error)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$picture)){ 
				\F3::get('DB')->exec("INSERT INTO missions (name, picture) VALUES (:name, :picture)",array(
						"name"=>$name,
						"picture"=>$picture,
						
					)); 
			}
			else 
				return;
		}

		
		
	}