<?php
	namespace models;
	
	class locals{
		
		static function getLocals($job, $link){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id pid, p.name pname, p.surname psurname, p.photo pphoto, p.id_school ps, p.vk pv, p.twitter pt, p.fb pf, p.email pe, s.id sid, d.name dname, s.name sname, l.id, l.link, l.name
							  FROM people p LEFT JOIN schools s 
							  ON p.id_school=s.id
							  INNER JOIN departments d on s.id_department = d.id
							  LEFT JOIN locals l ON d.id_local=l.id 
							  LEFT JOIN people_posts pp ON p.id=pp.id_people
							  WHERE pp.id_post = '$job' AND l.link='$link'");

		}
		
		static function getLocalsPerson($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT p.id pid, p.name pname, p.surname psurname, p.photo pphoto, p.id_school ps, p.vk pv, p.twitter pt, p.fb pf, p.email pe, s.id sid, d.name dname, s.name sname, l.id, l.link, l.name
							  FROM people p LEFT JOIN schools s 
							  ON p.id_school=s.id
							  INNER JOIN departments d on s.id_department = d.id
							  LEFT JOIN locals l ON d.id_local=l.id 
							  LEFT JOIN people_posts pp ON p.id=pp.id_people
							  WHERE p.id='$id'");

		}

		
		static function getLocalsByLink($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT name, link, id
							  FROM locals l
							  WHERE l.link='$link'");

		}
		
		static function getLocalsDocuments($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.id id, d.name name, d.link dlink, d.id_category catid, dc.name cname, ld.id_local, ld.id_document, l.id lid, l.link loclink
							  FROM documents d INNER JOIN document_categories dc
							  ON d.id_category=dc.id
							  LEFT JOIN local_documents ld on d.id = ld.id_document
							  INNER JOIN locals l on ld.id_local=l.id
							  WHERE l.link='$link' and d.type=1
							  LIMIT 5");

		}
		
		static function getLocalsDocumentsByCat($cat,$link){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.id id, d.name name, d.link dlink, d.id_category catid, dc.name cname, ld.id_local, ld.id_document, l.id lid, l.link loclink
							  FROM documents d INNER JOIN document_categories dc
							  ON d.id_category=dc.id
							  LEFT JOIN local_documents ld on d.id = ld.id_document
							  INNER JOIN locals l on ld.id_local=l.id
							  WHERE l.link='$link' and d.type=1 and d.id_category=$cat
							  LIMIT 5");

		}
		
		static function getLocalsDocumentsAll($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.id id, d.name name, d.link dlink, d.id_category catid, dc.id, dc.name cname, ld.id_local, ld.id_document, l.id lid, l.link loclink
							  FROM documents d INNER JOIN document_categories dc
							  ON d.id_category=dc.id
							  LEFT JOIN local_documents ld on d.id = ld.id_document
							  INNER JOIN locals l on ld.id_local=l.id
							  WHERE l.link='$link' and d.type=1");

		}
		
				
		static function getLocalsNews($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT bn.date_created bnd, bn.name bnname, bn.text bntx, bn.picture picture, b.id, lb.id_blog, lb.id_local, l.id, l.link loclink
							  FROM blognews bn INNER JOIN blogs b
							  ON bn.id_blog=b.id
							  LEFT JOIN local_blogs lb on b.id = lb.id_blog
							  INNER JOIN locals l on lb.id_local=l.id
							  WHERE l.link='$link'
							  LIMIT 6");

		}
		static function getLocalsNewsById($link, $id){
			$db = \F3::get('DB');
			return $db->exec("SELECT bn.id, bn.date_created bnd, bn.name bnname, bn.text bntx, bn.picture picture, b.id, lb.id_blog, lb.id_local, l.id lid, l.link loclink
							  FROM blognews bn INNER JOIN blogs b
							  ON bn.id_blog=b.id
							  LEFT JOIN local_blogs lb on b.id = lb.id_blog
							  INNER JOIN locals l on lb.id_local=l.id
							  WHERE l.link='$link'and bn.id='$id'");

		}
		
		static function getLocalsNewsAll($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT bn.id nid, bn.date_created bnd, bn.name bnname, bn.text bntx, bn.picture picture, b.id, lb.id_blog, lb.id_local, l.id, l.link loclink
							  FROM blognews bn INNER JOIN blogs b
							  ON bn.id_blog=b.id
							  LEFT JOIN local_blogs lb on b.id = lb.id_blog
							  INNER JOIN locals l on lb.id_local=l.id
							  WHERE l.link='$link' ");

		}
		
		
		static function getDepartments(){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.name dname, l.link link
							  FROM departments d 
							  LEFT JOIN locals l 
							  ON d.id_local=l.id");

		}
		static function getSchools(){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, name
							  FROM schools 
							  ");

		}
		
		static function getSchoolsByLocalLink($link){
			$db = \F3::get('DB');
			return $db->exec("SELECT s.id, s.name, l.link, l.id lid
							  FROM schools s 
							  LEFT JOIN departments d on s.id_department=d.id
							  LEFT JOIN locals l on d.id_local=l.id
							  WHERE l.link='$link'");

		}
		
		static function deleteLocal($id){
		return(\F3::get('DB')->exec("DELETE FROM locals WHERE id='$id'"));
		}
		
		static function getLocal(){
			$db = \F3::get('DB');
			return $db->exec("SELECT *
							  FROM locals");

		}
		
		static function getLocalById($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT l.name, l.link, l.id id
							  FROM locals l
							  WHERE id='$id'");

		}
		
		static function postLocal($name, $link)
		{
				\F3::get('DB')->exec("INSERT INTO locals (name, link) VALUES (:name, :link)",array(
						"name"=>$name,
						"link"=>$link,
						
					)); 
		}
		
		static function postChangeLocal($id, $name, $link)
		{
			\F3::get('DB')->exec("UPDATE locals SET name=:name, link=:link WHERE id=:id",
				array(
						"name"=>$name,
						"id"=>$id, 
						"link"=>$link
						));
		}
		
		static function postLocalHead($name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$link_loc)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$link_loc\"")[0]["id"];
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
				\F3::get('DB')->exec("INSERT INTO people_posts (id_people, id_post) VALUES (?, 5)",$id); 
				\F3::get('DB')->exec("INSERT INTO locals (id_head) VALUES (?)",$id); 
		
				} 
			else 
				return; 
		}
		
		static function deleteLocalHead($id)
		{
			\F3::get('DB')->exec("DELETE FROM people_posts WHERE id_people = ? AND id_post = 5",$id);
		}
		
		static function postChangeLocalHead($id,$name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo, $link_loc)
		{
			
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
				$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$link_loc\"")[0]["id"];
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
						
					
			\F3::get('DB')->exec("UPDATE locals SET id_head=:id WHERE id=:id_loc",
			array(	
				"id"=>$id,
				"id_loc"=>$id_loc));
		}
		
		
			static function postLocalSecretary($name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$link_loc)
		{
			
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$link_loc\"")[0]["id"];
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
				\F3::get('DB')->exec("INSERT INTO people_posts (id_people, id_post) VALUES (?, 6)",$id); 
				\F3::get('DB')->exec("INSERT INTO locals (id_secretary) VALUES (?)",$id); 
		
				} 
			else 
				return; 
		}
		
		static function deleteLocalSecretary($id)
		{
			\F3::get('DB')->exec("DELETE FROM people_posts WHERE id_people = ? AND id_post = 6",$id);
		}
		
		static function postChangeLocalSecretary($id,$name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo, $link_loc)
		{
			
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
				$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$link_loc\"")[0]["id"];
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
						
					
			\F3::get('DB')->exec("UPDATE locals SET id_secretary=:id WHERE id=:id_loc",
			array(	
				"id"=>$id,
				"id_loc"=>$id_loc));
		}
		
		static function postLocalMember($name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$link_loc)
		{
			var_dump($link_loc);
			if(move_uploaded_file($error, 'ui/images/'.$photo)){ 
				$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$link_loc\"")[0]["id"];
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
				\F3::get('DB')->exec("INSERT INTO people_posts (id_people, id_post) VALUES (?, 7)",$id); 
				\F3::get('DB')->exec("INSERT local_members (id_member, id_local) VALUES ('$id', '$id_loc')"); 
		
				} 
			else 
				return; 
		}
		
		static function deleteLocalMember($id)
		{
			\F3::get('DB')->exec("DELETE FROM people_posts WHERE id_people = ? AND id_post = 7",$id);

		}
		
		static function postChangeLocalMember($id,$name,$surname,$id_school,$email,$vk,$facebook,$twitter,$photo,$error,$prev_photo, $link_loc)
		{
			
			$photoForChange = $prev_photo;
			if(move_uploaded_file($error, 'ui/images/'.$photo))
				$photoForChange = $photo;
				$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$link_loc\"")[0]["id"];
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
						
					
			\F3::get('DB')->exec("UPDATE local_members SET id_member=:id WHERE id_local=:id_loc",
			array(	
				"id"=>$id,
				"id_loc"=>$id_loc));
		}
		
		static function postChangeNew($id, $name, $text, $author, $picture, $error, $prev_picture, $loclink)
		{
			$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$loclink\"")[0]["id"];
			$id_blog = \F3::get('DB')->exec("Select id_blog FROM local_blogs Where id_local = \"$id_loc\"")[0]["id_blog"];

			$date=date("Y-m-d");
			$pictureForChange = $prev_picture;
						if(move_uploaded_file($error, 'ui/images/'.$picture))  
							$pictureForChange = $picture;
			\F3::get('DB')->exec("UPDATE blognews SET name=:name, text =:text, picture=:picture, author=:author, date_created=:date_update, id_blog=:id_blog WHERE id = :id",
			array(
						"name"=>$name,
						"text"=>$text,
						"picture"=>$picture,
						"author"=>$author,
						"id"=>$id,
						"date_update" => $date,
						"id_blog"=>$id_blog
				));
		}
		
		static function postNew($name, $text, $author, $picture, $error, $loclink)
		
		{
			$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$loclink\"")[0]["id"];
			$id_blog = \F3::get('DB')->exec("Select id_blog FROM local_blogs Where id_local = \"$id_loc\"")[0]["id_blog"];
			
			$date=date("Y-m-d");
			if(move_uploaded_file($error, 'ui/images/'.$picture)){ 
				\F3::get('DB')->exec("INSERT INTO blognews (name, text, picture, author, date_created, id_blog) VALUES (:name, :text, :picture, :author, :date_created, :id_blog)",
				array(
						"name"=>$name,
						"text"=>$text,
						"picture"=>$picture,
						"author"=>$author,
						"date_created"=>$date,
						"id_blog"=>$id_blog
						
					)); 
			}
			else 
				return;
		}

		static function deleteNew($id){
		return(\F3::get('DB')->exec("DELETE FROM blognews WHERE id='$id'"));
		}
		
		static function getNewsDetail($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT n.id, n.name nname, n.date_created ndate_created, n.picture npict, n.text ntext, n.author author
							  FROM blognews n 
							  WHERE n.id='$id'");

		}
		
		static function postChangeDocument($id,$name, $id_cat, $loclink, $link, $error)
		{
			
			if(move_uploaded_file($error, 'ui/files/'.$link)){
			\F3::get('DB')->exec("UPDATE documents SET name = :name, link=:link, id_category=:id_cat WHERE id = :id",
				array(
						"name"=> $name,
						"link"=> $link,
						"id_cat"=>$id_cat,
						"id"=>$id
						));
						
			$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$loclink\"")[0]["id"];		
			$id_doc = \F3::get('DB')->exec("SELECT id FROM documents ORDER BY id DESC LIMIT 1")[0]['id'];			
				\F3::get('DB')->exec("UPDATE local_documents SET id_local=:id_local  WHERE id_document=:id_document",array(
						"id_local"=>$id_loc,
						"id_document"=>$id_doc
						
					)); 
						
			}
			else
			return;
						
		}
		
		static function deleteDocument($id){
		return(\F3::get('DB')->exec("DELETE FROM documents WHERE id='$id'"));
		}
	
		static function postDocument($name,$id_cat, $loclink, $link, $error)
		{
			if(move_uploaded_file($error, 'ui/files/'.$link)){
				\F3::get('DB')->exec("INSERT INTO documents (name, id_category, link, type) VALUES (:name, :id_category, :link, :type)",array(
						"name"=>$name,
						"id_category"=>$id_cat,
						"link"=>$link,
						"type"=>1
						
					)); 
					
					
	
					
			$id_loc = \F3::get('DB')->exec("Select id FROM locals Where link = \"$loclink\"")[0]["id"];		
			$id_doc = \F3::get('DB')->exec("SELECT id FROM documents ORDER BY id DESC LIMIT 1")[0]['id'];			
				\F3::get('DB')->exec("INSERT INTO local_documents (id_local, id_document) VALUES (:id_local, :id_document)",array(
						"id_local"=>$id_loc,
						"id_document"=>$id_doc
						
					)); 
					}
					else
					return;
							
		}













	}