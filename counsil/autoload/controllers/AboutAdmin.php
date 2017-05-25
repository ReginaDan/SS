<?php
	namespace controllers;
	
	class AboutAdmin  {
		
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }
				
		public function show_about_info($f3){
			
			$council=\models\council::getCouncil();
			$f3->set('council', $council);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
		
			echo(new \Template)->render('/views/admin/about_info.htm');
			
		}
		
		public function post_about_info($f3)
		{
			\models\council::postCouncilInfo($_POST['info']);
			\F3::reroute('/admin/about/info');
		}
		
		public function show_about_missions($f3){
			
			
			$missions = \models\missions::getMissions();
			$f3->set('missions', $missions);	
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			echo(new \Template)->render('/views/admin/about_missions.htm');
			
		}
	
		public function about_missions_change ($f3){
			$f3->set('missions', \models\missions::getMission($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/about_missions_change.htm');	
		}
		
		public function post_about_missions_change($f3){
			\models\missions::postChangeMission($f3->get('PARAMS.id'), $_POST['name'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['prev_picture']);
			\F3::reroute('/admin/about/missions');
		}
		
		public function delete_mission($f3)
		{
			\models\missions::deleteMission($_POST['id']);
			\F3::reroute('/admin/about/missions');
		}
		
		public function add_mission($f3){
			$f3->set('missions', \models\missions::getMissions());
			echo(new \Template)->render('/views/admin/about_missions_add.htm');	
		}
		
		public function post_add_mission($f3){
			\models\missions::postMission($_POST['name'],$_FILES['picture']["name"],$_FILES['picture']["tmp_name"]);
			\F3::reroute('/admin/about/missions');
		}

				
		public function show_about_partners($f3){
			
			
			$partners=\models\partners::getPartners();
			$f3->set('partners', $partners);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			echo(new \Template)->render('/views/admin/about_partners.htm');
			
		}
		
		public function about_partners_change ($f3){
			$f3->set('partners', \models\partners::getPartner($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/about_partners_change.htm');	
		}
		
		public function post_about_partners_change($f3){
			\models\partners::postChangePartner($f3->get('PARAMS.id'), $_POST['name'], $_POST['link'], $_FILES['photo']["name"], $_FILES['photo']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('/admin/about/partners');
		}
		
		public function delete_partner($f3)
		{
			\models\partners::deletePartner($_POST['id']);
			\F3::reroute('/admin/about/partners');
		}
		
		public function add_partner($f3){
			$f3->set('partners', \models\partners::getPartners());
			echo(new \Template)->render('/views/admin/about_partners_add.htm');	
		}
		
		public function post_add_partner($f3){
			\models\partners::postPartner($_POST['name'], $_POST['link'], $_FILES['photo']["name"], $_FILES['photo']["tmp_name"]);
			\F3::reroute('/admin/about/partners');
		}

		
				
	}

		
