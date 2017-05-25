<?php
	namespace controllers;
	
	class CommiteesAdmin  {
		
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_commiteeList($f3){
			$link = $f3->get('PARAMS.link');
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
	
			echo(new \Template)->render('/views/admin/commitees_list.htm');
			
		}
		
		public function delete_commitee($f3)
		{
			\models\commitees::deleteCommitee($f3->get('PARAMS.id'));
			\F3::reroute('/admin/commitees/list');
		}
		
		public function post_commitees_change($f3){
			\models\commitees::postChangeCommitee($f3->get('PARAMS.id'), $_POST['name'], $_POST['link']);
			\F3::reroute('/admin/commitees/list');
		}
				
		public function commitees_change ($f3){
			$f3->set('commitees', \models\commitees::getCommiteesById($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/commitees_list_change.htm');	
		}
		public function add_commitee($f3){
			$f3->set('commitees', \models\commitees::getAllCommitees());
			echo(new \Template)->render('/views/admin/commitees_list_add.htm');	
		}
		public function post_add_commitee($f3){
			\models\commitees::postCommitee($_POST['name'], $_POST['link']);
			\F3::reroute('/admin/commitees/list');
		}
		
		
				
				
	}

