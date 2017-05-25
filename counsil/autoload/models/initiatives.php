<?php
	namespace models;
	
	class initiatives{
		
			
		static function getInitiatives(){
			$db = \F3::get('DB');
			return $db->exec("SELECT name FROM initiatives");

		}
		
	}