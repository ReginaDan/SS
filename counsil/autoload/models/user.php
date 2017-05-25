<?
	namespace models;
	class user
	{
		function __construct()
		{
			
		}	

		static function get_user($token)
		{
			$token_mapper = new \DB\SQL\Mapper(\F3::get('DB'),'token');
			$TOKEN = $token_mapper->load(array("token=?",$token));
			$user_mapper = new \DB\SQL\Mapper(\F3::get('DB'),'user');
			$USER = $user_mapper->load(array("id=?",$TOKEN->id_user));
			return $USER;
		}

		static function register($name,$surname,$login,$pwd,$link)
		{
			\F3::get('DB')->exec("INSERT INTO user (name,surname,login,pwd,role) VALUES (:name,:surname,:login,:pwd,:role)",array(
				"name"=>$name,
				"surname"=>$surname,
				"login"=>$login,
				"pwd"=>md5(md5($pwd)),
				"role"=>0
				));
			\F3::get('DB')->exec("DELETE FROM user_registration WHERE link = ?",$link);
		}

		static function checkAvailable($link)
		{
			$result = \F3::get('DB')->exec("SELECT * FROM user_registration WHERE link = ?",$link);
			
			return !!$result;
		}
	}