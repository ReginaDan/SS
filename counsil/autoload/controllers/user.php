<?
		namespace controllers;
		Class user
		{
			function login($f3)
			{
				$login = "hello";
				//$_POST["username"];
				$password = "hello";
				//$_POST["password"];
				$auth = \F3::get("auth");
				if (isset($login) && isset($password)){
					$auth->login($login, $password, true); \F3::reroute("/");
				}
				$template = new \template;
				echo $template->render('login.htm');
			}

			function logout($f3)
			{
				$auth = \F3::get("auth");
				$auth->logout();
				\F3::reroute("login");
			}

			function registration($f3)
			{
				
			}
		}