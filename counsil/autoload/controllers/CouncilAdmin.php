<?php
	namespace controllers;
	
	class CouncilAdmin  {
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
						
		public function show_appeals($f3)
		{
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			\F3::set('appealIndex',1);

			$data = \models\council::getCouncilAppeals();

			$f3->set('appeals',$data);

			echo(new \Template)->render('/views/admin/council_appeals.htm');
		}

		public function send_answer()
		{
			$id = \F3::get("POST.id_appeal");
			$answer = \F3::get("POST.answer");
			\models\council::setCouncilAnswer($id,$answer);
		}
		
	}

		