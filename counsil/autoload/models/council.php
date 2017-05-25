<?php
	namespace models;
	
	class council{
		
		static function getCouncil(){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, info, picture
							  FROM council");

		}	
		
		static function postCouncilInfo($info)
		{

			\F3::get('DB')->exec("UPDATE council SET info = ?",$info);
		}
		
		static function getCouncilAppeals()
		{
			return \F3::get("DB")->exec("SELECT * 
										 FROM appeals 
										 WHERE id_category = 1");
		}
		
		static function setCouncilAnswer($id,$answer)
		{
			\F3::get("DB")->exec("UPDATE appeals SET status = :status, answer = :answer WHERE id = :id", array(
				"status"=>1,
				"answer"=>$answer,
				"id"=>$id
				));
		}
	
	}
