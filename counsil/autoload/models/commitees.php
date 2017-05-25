<?php
	namespace models;
	
	class commitees{
		
		static function getCommiteesByLink($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, commitees.name, commitees.link, commitees.info, commitees.logo
							  FROM commitees 
							  WHERE commitees.link='$link'");

		}
		static function getCommiteesById($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, commitees.name, commitees.link, commitees.info, commitees.logo
							  FROM commitees 
							  WHERE commitees.id='$id'");

		}
		
		static function getBlogNewById($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT *
							  FROM blognews 
							  WHERE id='$id'");

		}
		
		static function getAllCommitees(){
			$db = \F3::get('DB');
			return $db->exec("SELECT commitees.id, commitees.name, commitees.link, commitees.info
							  FROM commitees");

		}
		
		static function getCommiteesHead($job,$link){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id pid, p.name pname, p.surname psurname, p.photo pphoto, ps.name psname, p.id_school ps, p.vk pv, p.twitter pt, p.fb pf, p.email pe, s.id sid, d.name dname, s.name sname,  c.id cid,  c.link, c.name
							  FROM people p LEFT JOIN schools s 
							  ON p.id_school=s.id
							  LEFT JOIN departments d on s.id_department = d.id
							  LEFT JOIN people_posts pp ON p.id=pp.id_people
							  LEFT JOIN posts ps on pp.id_post=ps.id
							  LEFT JOIN commitees c on p.id=c.id_head
							  WHERE pp.id_post = '$job'AND c.link='$link'");
							 

		}
		
		static function getCommiteesMembers($job,$link){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id pid, p.name pname, p.surname psurname, p.photo pphoto, ps.name psname, p.id_school ps, p.vk pv, p.twitter pt, p.fb pf, p.email pe, s.id sid, d.name dname, s.name sname, c.link, c.name 
							  FROM people p 
							  LEFT JOIN schools s ON p.id_school=s.id 
							  LEFT JOIN departments d on s.id_department = d.id 
							  LEFT JOIN people_posts pp ON p.id=pp.id_people 
							  LEFT JOIN posts ps on pp.id_post=ps.id 
							  LEFT JOIN commitees_members cm on p.id=cm.id_member 
							  LEFT JOIN commitees c on cm.id_commitee=c.id 
							  WHERE pp.id_post = '$job'AND c.link='$link'");
							 

		}
		static function getCommiteesAllProjects(){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id id, p.name pname, p.date_created pdate, p.description pdesc, p.picture, c.link comlink
							  FROM projects p 
							  LEFT JOIN commitees c ON p.id_commitee=c.id");

		}
		static function getComProjOffset($link, $offset){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id id, p.name pname, p.date_created pdate, p.description pdesc, p.picture, c.name cname, c.link comlink
							  FROM projects p 
							  LEFT JOIN commitees c ON p.id_commitee=c.id
							  WHERE c.link ='$link'
							  ORDER BY pdate DESC
							  LIMIT 10 OFFSET $offset ");

		}
		static function getCommiteesProjectsByLink($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id id, p.name pname, p.date_created pdate, p.description pdesc, p.picture, c.name cname, c.link comlink
							  FROM projects p 
							  LEFT JOIN commitees c ON p.id_commitee=c.id
							  WHERE c.link ='$link'");

		}
				
		static function getCommiteesBlogsNews($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT bn.id nid, bn.date_created bnd, bn.name bnname, bn.text bntx, b.id, cb.id_blog, cb.id_commitee, c.id, b.name bname, c.link comlink, bn.picture
							  FROM blognews bn 
							  INNER JOIN blogs b
							  ON bn.id_blog=b.id
							  LEFT JOIN commitee_blog cb on b.id = cb.id_blog
							  INNER JOIN commitees c on cb.id_commitee=c.id
							  WHERE c.link='$link'");

		}
		
		static function getCommiteesBlogsNewsOffset($link, $offset){
			$db = \F3::get('DB');
			return $db->exec("SELECT bn.id nid, bn.date_created bnd, bn.name bnname, bn.text bntx, b.id, cb.id_blog, cb.id_commitee, c.id, b.name bname, c.link comlink, bn.picture
							  FROM blognews bn 
							  INNER JOIN blogs b
							  ON bn.id_blog=b.id
							  LEFT JOIN commitee_blog cb on b.id = cb.id_blog
							  INNER JOIN commitees c on cb.id_commitee=c.id
							  WHERE c.link='$link'
							  ORDER BY bnd DESC
							  LIMIT 10 OFFSET $offset");

		}
		static function getCommiteesBlogs($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT  b.id, cb.id_blog, cb.id_commitee, c.id, c.link, b.name bname
							  FROM  blogs b
							  LEFT JOIN commitee_blog cb on b.id = cb.id_blog
							  INNER JOIN commitees c on cb.id_commitee=c.id
							  WHERE c.link='$link'");

		}
		
		static function getCommiteesBlogsNewsDetail($link, $id){
			$db = \F3::get('DB');
			return $db->exec("SELECT bn.id nid, bn.date_created bnd, bn.name bnname, bn.text bntx, b.id, cb.id_blog, cb.id_commitee, c.id, b.name bname, c.link comlink
							  FROM blognews bn 
							  INNER JOIN blogs b
							  ON bn.id_blog=b.id
							  LEFT JOIN commitee_blog cb on b.id = cb.id_blog
							  INNER JOIN commitees c on cb.id_commitee=c.id
							  WHERE c.link='$link' and bn.id='$id'");

		}
		
		
		static function deleteCommitee($id){
		return(\F3::get('DB')->exec("DELETE FROM commitees WHERE id='$id'"));
		}
		
		static function postCommitee($name, $link)
		{
				\F3::get('DB')->exec("INSERT INTO commitees (name,link) VALUES (:name, :link)",array(
						"name"=>$name,
						"link"=>$link
						
					)); 
		}
		static function postChangeCommitee($id, $name, $link)
		{
			\F3::get('DB')->exec("UPDATE commitees SET name=:name, link=:link WHERE id=:id",
				array(
						"name"=>$name,
						"link"=>$link,
						"id"=>$id
						));
		}
		static function postCommiteesInfoChange($info,$photo, $error, $link_com)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
			\F3::get('DB')->exec("UPDATE commitees SET info =:info, logo=:logo WHERE link = :link",
			array(
						"info"=>$info,
						"link"=>$link_com,
						"logo"=>$photo
						)); 
									}
			else 
				return; 
		}
		
		static function deleteCommiteesMembers($id)
		{
			\F3::get('DB')->exec("DELETE FROM people_posts WHERE id_people = ? AND id_post = 10",$id);
		}
		static function postCommiteesMembers($name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$link_com)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				$id_com = \F3::get('DB')->exec("Select id FROM commitees Where link = \"$link_com\"")[0]["id"];
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
				\F3::get('DB')->exec("INSERT INTO people_posts (id_people, id_post) VALUES (?, 10)",$id); 
				\F3::get('DB')->exec("INSERT INTO commitees_members (id_member, id_commitee) VALUES (\"$id\", \"$id_com\")"); 
				} 
			else 
				return; 
		}
		static function postChangeCommiteesMembers($id,$name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo, $link_com)
		{ var_dump($prev_photo);
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
				$id_com = \F3::get('DB')->exec("Select id FROM commitees Where link = \"$link_com\"")[0]["id"];
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
						
			\F3::get('DB')->exec("UPDATE commitees_members SET id_member=:id WHERE id_commitee=:id_com",
			array(
						"id"=>$id,
						"id_com"=>$id_com
				
			));			
		}
		
		static function postProject($name, $description, $picture, $error, $link_com)
		{
			$id_com = \F3::get('DB')->exec("Select id FROM commitees Where link = \"$link_com\"")[0]["id"];
			$date=date("Y-m-d");
			if(move_uploaded_file($error, 'ui/images/'.$picture)){ 
				\F3::get('DB')->exec("INSERT INTO projects (name, description, id_commitee, picture, date_created) VALUES (:name, :description, :id_com, :picture, :date_created)",array(
						"name"=>$name,
						"id_com"=>$id_com,
						"description"=>$description,
						"picture"=>$picture,
						"date_created"=>$date
						
					)); 
			}
			else 
				return;
		}
		
		static function deleteCommiteesProject($id){
		return(\F3::get('DB')->exec("DELETE FROM projects WHERE id='$id'"));
		}
		
		static function postChangeCommiteeProject($id, $name, $description, $picture, $error, $link_com, $prev_picture)
		{
			$id_com = \F3::get('DB')->exec("Select id FROM commitees Where link = \"$link_com\"")[0]["id"];
			$date=date("Y-m-d");
			$pictureForChange = $prev_picture;
						if(move_uploaded_file($error, 'ui/images/'.$picture))  
							$pictureForChange = $picture;
			\F3::get('DB')->exec("UPDATE projects SET name=:name, description =:description, id_commitee=:id_com, picture=:picture, date_created=:date_update  WHERE id = :id",
			array(
						"name"=>$name,
						"id_com"=>$id_com,
						"description"=>$description,
						"picture"=>$picture,
						"id"=>$id,
						"date_update" => $date
				));
		}
		
		static function postCommiteeBlogNews($name, $text, $picture, $error, $link_com)
		{
			$id_com = \F3::get('DB')->exec("Select id FROM commitees Where link = \"$link_com\"")[0]["id"];
			$id_blog = \F3::get('DB')->exec("Select id_blog FROM commitee_blog Where id_commitee = \"$id_com\"")[0]["id_blog"];
			$date=date("Y-m-d");
			if(move_uploaded_file($error, 'ui/images/'.$picture)){ 
				\F3::get('DB')->exec("INSERT INTO blognews (name, text, id_blog, picture, date_created) VALUES (:name, :text, :id_blog, :picture, :date_created)",array(
						"name"=>$name,
						"id_blog"=>$id_blog,
						"text"=>$text,
						"picture"=>$picture,
						"date_created"=>$date
						
					)); 
			}
			else 
				return;
		}
		
		static function deleteCommiteesBlogNew($id){
		return(\F3::get('DB')->exec("DELETE FROM blognews WHERE id='$id'"));
		}
		
		static function postChangeCommiteeBlogNews($id, $name, $text, $picture, $error, $prev_picture, $link_com)
		{
			$id_com = \F3::get('DB')->exec("Select id FROM commitees Where link = \"$link_com\"")[0]["id"];
			$id_blog = \F3::get('DB')->exec("Select id_blog FROM commitee_blog Where id_commitee = \"$id_com\"")[0]["id_blog"];
			$date=date("Y-m-d");
			$pictureForChange = $prev_picture;
						if(move_uploaded_file($error, 'ui/images/'.$picture))  
				
							$pictureForChange = $picture;
			\F3::get('DB')->exec("UPDATE blognews SET name=:name, text =:text, picture=:picture, date_created=:date_update  WHERE id = :id and id_blog=:id_blog ",
			array(
						"name"=>$name,
						"id_blog"=>$id_blog,
						"text"=>$text,
						"picture"=>$picture,
						"id"=>$id,
						"date_update" => $date
				));
		}










		
	}
