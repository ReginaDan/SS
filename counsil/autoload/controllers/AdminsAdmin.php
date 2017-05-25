<?php
	namespace controllers;
	
	class AdminsAdmin  {
		
		public function show_admins($f3){
			
			$admins=\models\admins::getAdmins();
			$f3->set('admins', $admins);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			echo(new \Template)->render('/views/admin/admins.htm');
			
		}
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }
    
    public function delete_admin($f3)
		{
			\models\admins::deleteAdmin($f3->get('PARAMS.id'));
			\F3::reroute('/admin/admins');
		}

	public function generateLink($f3){
		$link = $f3->set('link',\models\admins::generateLink());
		echo(new \Template)->render('/views/admin/newlink.htm');
	}
				
	}