<?php
	namespace models;
	
	class ombudsman{
		
		static function getOmbudsman($job){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id pid, p.name pname, p.surname psurname, p.photo pphoto, ps.name psname, p.id_school ps, p.vk pv, p.twitter pt, p.fb pf, p.email pe, s.id sid, d.name dname
							  FROM people p LEFT JOIN schools s 
							  ON p.id_school=s.id
							  INNER JOIN departments d on s.id_department = d.id
							  LEFT JOIN people_posts pp ON p.id=pp.id_people LEFT JOIN posts ps on pp.id_post=ps.id
							  WHERE pp.id_post = '$job'");

		}

		static function getMember($id)
		{
			return \F3::get('DB')->exec("SELECT p.name as name, p.surname as surname, p.photo as photo,
											p.vk as vk, p.fb as facebook, p.twitter as twitter, p.email as email, p.id_school as id_school, schools.name as school
			 FROM people p JOIN schools ON schools.id = p.id_school WHERE p.id = ?",(int)$id)[0];
		}
		
		static function getOmbudsmanAllocution($job){
			$db = \F3::get('DB');
			return $db->exec("SELECT text
							  FROM allocution");
		}
		
		static function deleteOmbudsmanPeople($id)
		{
			\F3::get('DB')->exec("DELETE FROM people_posts WHERE id_people = ? AND id_post = 9",$id);
		}

		static function postOmbudsmanAllocation($allocution)
		{

			\F3::get('DB')->exec("UPDATE allocution SET allocution.text = ?",$allocution);
		}
		static function getAllSchools(){
			return \F3::get('DB')->exec("SELECT * FROM schools");
		}

		static function getOmbudsmanAppeals()
		{
			return \F3::get("DB")->exec("SELECT * FROM appeals WHERE id_category = 2");
		}

		static function setOmbudsmanAnswer($id,$answer)
		{
			\F3::get("DB")->exec("UPDATE appeals SET status = :status, answer = :answer WHERE id = :id", array(
				"status"=>1,
				"answer"=>$answer,
				"id"=>$id
				));
		}


		static function postOmbudsmanTeam($name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error)
		{
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				\F3::get('DB')->exec("INSERT INTO people (name, surname, photo, id_school, vk, fb, twitter, email) VALUES (:name,:surname,:photo,:id_school,:vk,:fb,:twitter,:email)",array(
						"name"=>$name,
						"surname"=>$surname,
						"vk"=>$vk,
						"id_school"=>$id_school,
						"fb"=>$facebook,
						"twitter"=>$twitter,
						"photo"=>$photo,
						"email"=>$email
					)); 
				$id = \F3::get('DB')->exec("SELECT id FROM people WHERE name = :name AND surname = :surname AND id_school = :id_school",array("name"=>$name,"surname"=>$surname,"id_school"=>$id_school))[0]['id'];
				\F3::get('DB')->exec("INSERT INTO people_posts (id_people, id_post) VALUES (?, 8)",$id); 
				} 
			else 
				return; 
		}
		static function postOmbudsman($name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				\F3::get('DB')->exec("INSERT INTO people (name, surname, photo, id_school, vk, fb, twitter, email) VALUES (:name,:surname,:photo,:id_school,:vk,:fb,:twitter,:email)",array(
						"name"=>$name,
						"surname"=>$surname,
						"vk"=>$vk,
						"id_school"=>$id_school,
						"fb"=>$facebook,
						"twitter"=>$twitter,
						"photo"=>$photo,
						"email"=>$email
					)); 
				$id = \F3::get('DB')->exec("SELECT id FROM people WHERE name = :name AND surname = :surname AND id_school = :id_school",array("name"=>$name,"surname"=>$surname,"id_school"=>$id_school))[0]['id'];
				\F3::get('DB')->exec("INSERT INTO people_posts (id_people, id_post) VALUES (?, 9)",$id); 
				} 
			else 
				return; 
		}

		static function postChangeOmbudsmanTeam($id,$name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo)
		{
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
			\F3::get('DB')->exec("UPDATE people SET name = :name, surname = :surname, photo = :photo, id_school = :id_school, vk = :vk, fb = :fb, twitter = :twitter, email = :email WHERE id = :id",
				array(
						"name"=>$name,
						"surname"=>$surname,
						"photo"=>$photoForChange,
						"id_school"=>$id_school,
						"vk"=>$vk,
						"fb"=>$facebook,
						"twitter"=>$twitter,
						"email"=>$email,
						"id"=>$id
						));
		}
		static function postChangeOmbudsman($id,$name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo)
		{
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
			\F3::get('DB')->exec("UPDATE people SET name = :name, surname = :surname, photo = :photo, id_school = :id_school, vk = :vk, fb = :fb, twitter = :twitter, email = :email WHERE id = :id",
				array(
						"name"=>$name,
						"surname"=>$surname,
						"photo"=>$photoForChange,
						"id_school"=>$id_school,
						"vk"=>$vk,
						"fb"=>$facebook,
						"twitter"=>$twitter,
						"email"=>$email,
						"id"=>$id
						));
		}

		static function deleteOmbudsmanTeam($id)
		{
			\F3::get('DB')->exec("DELETE FROM people_posts WHERE id_people = ? AND id_post = 8",$id);
		}
	}