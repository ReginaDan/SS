<?php
	namespace controllers;
	
	class CommiteeProjectAdmin  {
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_commiteeProject($f3){
			
			$link = $f3->get('PARAMS.link');
			
			$projects = \models\commitees::getCommiteesProjectsByLink($link);
			$f3->set('projects', $projects);
			
									
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments();
			$f3->set('departments', $departments);			
			

			echo(new \Template)->render('/views/admin/commitees_projects.htm');
			
		}
		
		public function add_commitees_project($f3){
			
			$link = $f3->get('PARAMS.link');
		
			
			$projects = \models\commitees::getCommiteesProjectsByLink($link);
			$f3->set('projects', $projects);
			
									
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			
			echo(new \Template)->render('/views/admin/commitees_projects_add.htm');	
		}
		
		public function post_add_commitees_project($f3){
			\models\commitees::postProject($_POST['name'], $_POST['description'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['commitee']);
			\F3::reroute('/admin/commitees/projects/link/'.$_POST['commitee']);
		}
		
		public function delete_commitees_project($f3)
		{
			\models\commitees::deleteCommiteesProject($f3->get('PARAMS.id'));
			\F3::reroute('/admin/commitees/projects/link/'.$f3->get('PARAMS.link'));
		}	
		
		public function change_commitees_project ($f3){
			$link = $f3->get('PARAMS.link');

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$projects = \models\commitees::getCommiteesProjectsByLink($link);
			$f3->set('projects', $projects);
			
			echo(new \Template)->render('/views/admin/commitees_projects_change.htm');	
		}
		
		public function post_change_commitees_project($f3)
		{
			
			\models\commitees::postChangeCommiteeProject($f3->get('PARAMS.id'),  $_POST['name'], $_POST['description'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['commitee'],$_POST['prev_picture']);
			 \F3::reroute('/admin/commitees/projects/link/'.$_POST['commitee']);
		}
				
	}

