<?php
	namespace controllers;
	
	class Login  {
		
		public function show_login_page($f3){
		
		$auth = \F3::get("auth");
		if (isset($_POST["username"]) && isset($_POST["password"])){
			$auth->login($_POST["username"], $_POST["password"], false);
		}
		echo(new \Template)->render('/views/admin/login_page.htm');
			
		}
		
		public function login($f3)
		{
			$login = $_POST['username'];
			$password = $_POST['password'];
			$auth = \F3::get("auth");
			$auth->login($login, $password, true);
			\F3::reroute("/admin/");
		}

		public function show_register_page($f3){
		$available = \models\user::checkAvailable($f3->get('PARAMS.link'));
		if($available)
			echo(new \Template)->render('/views/admin/registration_page.htm');
		else
			echo(new \Template)->render('/views/admin/error.htm');
		}
		
		public function register($f3){
			if(isset($_POST['email'])){
				if($_POST['password']==$_POST['confirmPassword'])
				{
					\models\user::register($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$f3->get('PARAMS.link'));
					\F3::reroute("/admin/login");
				}
			}
			\F3::reroute("/admin/register");
		}	
	}

		
