<?php
	namespace models;
	
	class admins{
		
		static function getAdmins(){
			$db = \F3::get('DB');
			return $db->exec("SELECT id, name, surname
							  FROM user");

		}		
		
		static function deleteAdmin($id){
		return(\F3::get('DB')->exec("DELETE FROM user WHERE id='$id'"));
		}

		static function generateLink(){
			$chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
			$numChars = strlen($chars);
			$string = '';
			for ($i = 0; $i < 12; $i++) {
			    $string .= substr($chars, rand(1, $numChars) - 1, 1);
			}
			\F3::get('DB')->exec("INSERT INTO user_registration (link) VALUES (:link)",array('link'=>$string));
			return "http://ss.styleru.net/counsil/admin/register/".$string;
		}

	}
