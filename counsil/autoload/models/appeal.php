<?php
	namespace models;
	
	class appeal{
		
		static function appelToSS($author_name,$author_surname,$text,$id_category,$email)
		{
			\F3::get("DB")->exec("INSERT INTO appeals (appeal,author_name,author_surname,id_category,email) VALUES (:atext, :author_name, :author_surname, :id_category, :email)",  array(
				"atext" => $text,
				"author_name" => $author_name,
				"author_surname" => $author_surname,
				"id_category" => $id_category,
				"email" => $email
				));
		} 	
		
		static function addToDispatch($email)
		{
			\F3::get("DB")->exec("INSERT INTO followers (email) VALUES (:email)", array(
				"email" => $email
				));
		}
	}
