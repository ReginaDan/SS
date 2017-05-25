<?php
	namespace models;
	
	class organizations{
		
			
		static function getOrganizations(){
			$db = \F3::get('DB');
			return $db->exec("SELECT o.id, o.name oname, o.date_created odate_created, o.picture opict, o.description odesc, d.name dname, d.surname dsname 
							  FROM organizations o inner join directors d on o.id_director = d.id
							  LIMIT 10");

		}
		
		
		static function getOrganizationsDetail($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT o.id, o.name oname, o.date_created odate_created, o.picture opict, o.description odesc, d.name dname, d.surname dsname, d.photo dphoto, d.email de, d.vk dv, d.fb df, d.twitter dt
							  FROM organizations o 
							  INNER JOIN directors d 
							  ON o.id_director = d.id
							  WHERE o.id='$id'");

		}
		static function getDirectors(){
			$db = \F3::get('DB');
			return $db->exec("SELECT *
							  FROM directors");

		}
		static function getDirectorById($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT *
							  FROM directors
							  WHERE id='$id'");

		}
		
		static function postOrganization($name, $description, $id_dir, $picture, $error)
		{
			var_dump($description);
			$date=date("Y-m-d");
			if(move_uploaded_file($error, 'ui/images/'.$picture)){ 
				\F3::get('DB')->exec("INSERT INTO organizations (name, date_created, description, picture, id_director) VALUES (:name, :date_created, :description, :picture, :id_director )"
				,array(
						"name"=>$name,
						"date_created"=>$date,
						"description"=>$description,
						"picture"=>$picture,
						"id_director"=>$id_dir
						
						
					)); 
			}
			else 
				return;
		}
		
		static function deleteOrganization($id){
		return(\F3::get('DB')->exec("DELETE FROM organizations WHERE id='$id'"));
		}
		
		static function postChangeOrganization($id, $name, $description, $id_dir, $picture, $error)
		{
			$date=date("Y-m-d");
			$pictureForChange = $prev_picture;
						if(move_uploaded_file($error, 'ui/images/'.$picture))  
						var_dump($text);
							$pictureForChange = $picture;
			\F3::get('DB')->exec("UPDATE organizations SET name=:name, description =:description, picture=:picture, id_director=:id_director, date_created=:date_created  WHERE id = :id",
			array(
						"name"=>$name,
						"description"=>$description,
						"picture"=>$picture,
						"id_director"=>$id_dir,
						"id"=>$id,
						"date_created" => $date
				));
		}
		static function deleteOrganizationsHead($id)
		{
			\F3::get('DB')->exec("DELETE FROM directors WHERE id ='$id'");
		}
		
		static function postOrganizationsHead($name,$surname,$email,$vk,$facebook,$twitter,$photo,$error)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				\F3::get('DB')->exec("INSERT INTO directors (name, surname, photo, vk, fb, twitter, email) VALUES (:name,:surname,:photo,:vk,:fb,:twitter,:email)",array(
						"name"=>$name,
						"surname"=>$surname,
						"vk"=>$vk,
						"fb"=>$facebook,
						"twitter"=>$twitter,
						"photo"=>$photo,
						"email"=>$email
						));
				} 
			else 
				return; 
		}
		
		static function postChangeOrganizationsHead($id,$name,$surname,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo)
		{
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
				
				
			\F3::get('DB')->exec("UPDATE directors SET name = :name, surname = :surname, photo = :photo, vk = :vk, fb = :fb, twitter = :twitter, email = :email WHERE id = :id",
				array(
						"name"=>$name,
						"surname"=>$surname,
						"photo"=>$photoForChange,
						"vk"=>$vk,
						"fb"=>$facebook,
						"twitter"=>$twitter,
						"email"=>$email,
						"id"=>$id
						));
		}






		
	}