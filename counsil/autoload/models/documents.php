<?php
	namespace models;
	
	class documents{
		
			
		static function getDocumentsByCategory($cat){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.name dname, d.link dlink, d.id_category dcat, c.name cname 
							  FROM documents d 
							  INNER JOIN document_categories c
							  ON c.id=d.id_category
							  WHERE c.id = '$cat' AND d.type=0");

		}
		
		static function getDocumentById($id){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.name dname, d.link dlink, d.id_category dcat, c.name cname 
							  FROM documents d 
							  INNER JOIN document_categories c
							  ON c.id=d.id_category
							  WHERE d.id = '$id'");

		}
			static function getDocumentsCategory(){
			$db = \F3::get('DB');
			return $db->exec("SELECT c.name cname, c.id cid 
							  FROM document_categories c");

		}
		static function getCategoryByCategory($cat){
			$db = \F3::get('DB');
			return  $db->exec("SELECT c.name cname, c.id cid
							  FROM document_categories c
							  WHERE c.id = '$cat'");
							  

		}
		
		static function getCategoryById($id){
			$db = \F3::get('DB');
			return  $db->exec("SELECT c.name cname, c.id cid
							  FROM document_categories c
							  WHERE c.id = '$id'");

		}
		
		static function getDocuments(){
			$db = \F3::get('DB');
			return $db->exec("SELECT name, link FROM documents
							  WHERE type=0
							  LIMIT 5");

		}
		
		static function getDocumentsAll(){
			$db = \F3::get('DB');
			return $db->exec("SELECT d.id id, d.name name, d.link dlink, c.name cname
							  FROM documents d
							  LEFT JOIN document_categories c
							  ON c.id=d.id_category
							  WHERE type=0");

		}
		
		static function postCategory($name)
		{
				\F3::get('DB')->exec("INSERT INTO document_categories (name) VALUES (:name)",array(
						"name"=>$name
						
					)); 
		}
		
		static function deleteCategory($id){
		return(\F3::get('DB')->exec("DELETE FROM document_categories WHERE id='$id'"));
		}
		
		static function postChangeCategory($id, $name)
		{
			\F3::get('DB')->exec("UPDATE document_categories SET name=:name WHERE id=:id",
				array(
						"name"=>$name,
						"id"=>$id
						));
		}
		
		static function postChangeDocument($id,$name,$id_cat, $link, $error)
		{
			var_dump($id,$name,$id_cat, $link, $error);
			if(move_uploaded_file($error, 'ui/files/'.$link)){
			\F3::get('DB')->exec("UPDATE documents SET name = :name, link=:link, id_category=:id_cat WHERE id = :id",
				array(
						"name"=> $name,
						"link"=> $link,
						"id_cat"=>$id_cat,
						"id"=>$id
						));
			}
			else
			return;
		}
		
		static function deleteDocument($id){
		return(\F3::get('DB')->exec("DELETE FROM documents WHERE id='$id'"));
		}
	
		static function postDocument($name,$id_cat, $link, $error)
		{
			if(move_uploaded_file($error, 'ui/files/'.$link)){
				\F3::get('DB')->exec("INSERT INTO documents (name, id_category, link, type) VALUES (:name, :id_category, :link, :type)",array(
						"name"=>$name,
						"link"=> $link,
						"id_category"=>$id_cat,
						"type"=>0
						
					)); 
					}
							
		}



		
	}