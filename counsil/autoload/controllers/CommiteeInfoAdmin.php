<?php
	namespace controllers;
	
	class CommiteeInfoAdmin  {
		
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_commiteeInfo($f3){
			$link = $f3->get('PARAMS.link');
			
			$job = "4";
			$cominfo = \models\commitees::getCommiteesHead($job, $link);
			$f3->set('director', $cominfo);
			
			$job = "10";
			$cominfo = \models\commitees::getCommiteesMembers($job, $link);
			$f3->set('member', $cominfo);
									
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			echo(new \Template)->render('/views/admin/commitees_info.htm');
			
		}
		public function commitees_info_change($f3){
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);
															
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$id_commitees=\models\commitees::getCommiteesById($f3->get('PARAMS.id'));
			$f3->set('id_commitees', $id_commitees);


			echo(new \Template)->render('/views/admin/commitees_info_change.htm');
			
		}

		public function post_commitees_info_change($f3)
		{
			\models\commitees::postCommiteesInfoChange($_POST['info'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"], $_POST['commitee']);
			\F3::reroute('/admin/commitees/info/link/'.$_POST['commitee']);
		}
		
		
		
		public function add_commitees_members($f3){
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);
			$job = "4";
			$cominfo = \models\commitees::getCommiteesHead($job, $link);
			$f3->set('director', $cominfo);
			
			$job = "10";
			$cominfo = \models\commitees::getCommiteesMembers($job, $link);
			$f3->set('member', $cominfo);
									
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$schools= \models\people::getAllSchools();
			$f3->set('schools', $schools);
			echo(new \Template)->render('/views/admin/commitees_info_members_add.htm');	
		}
		
		public function post_add_commitees_members($f3){
			\models\commitees::postCommiteesMembers($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"], $_POST['commitee']);
			\F3::reroute('../../../info/link/'.$f3->get('PARAMS.link'));
		}

		public function change_commitees_members($f3){
			
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);

			$schools= \models\people::getAllSchools();
			$f3->set('schools', $schools);
			
			
			$job = "10";
			$member=\models\commitees::getCommiteesMembers($job, $link);
			$f3->set('member', $member);
			echo(new \Template)->render('/views/admin/commitees_info_members_change.htm');	
		}

		public function post_change_commitees_members($f3){
			\models\commitees::postChangeCommiteesMembers($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo'], $_POST['comlink']);
			
			
			\F3::reroute('../../../../info/link/'.$_POST['comlink']);
		}
		
		public function delete_commitees_members($f3)
		{
			\models\commitees::deleteCommiteesMembers(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/commitees/info/link/'.$f3->get('PARAMS.link'));
		}



		
		
				
	}

