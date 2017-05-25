<?php
	namespace controllers;
	
	class OmbudsmanAdmin  {

		
		function __construct(){
			$auth = \F3::get("auth");
			if (!$auth->check()) {
				\F3::reroute("counsil/admin/login");
			} else {
				\F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
				\F3::set("USER_ID", \F3::get("USER")->id);
			}
		}

		public function show_ombudsman_info($f3){
			$job = "9";
			$ombudsman = \models\ombudsman::getOmbudsman($job);
			$f3->set('ombudsman', $ombudsman);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			\F3::set('appealIndex',2);
			echo(new \Template)->render('/views/admin/ombudsman_info.htm');	
		}
		public function show_ombudsman_allocution($f3){
			$allocution=\models\ombudsman::getOmbudsmanAllocution($job);
			
			$f3->set('allocution', $allocution);			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			\F3::set('appealIndex',2);
			echo(new \Template)->render('/views/admin/ombudsman_allocution.htm');	
		}

		public function post_ombudsman_allocution($f3)
		{
			\models\ombudsman::postOmbudsmanAllocation($_POST['allocution']);
			\F3::reroute('/admin/ombudsman/allocution');
		}

		public function delete_ombudsman($f3)
		{
			\models\ombudsman::deleteOmbudsmanPeople(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/ombudsman/info');
		}

		public function show_ombudsman_team($f3){
			$job = "8";
			$ombudsman = \models\ombudsman::getOmbudsman($job);
			$f3->set('member', $ombudsman);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			\F3::set('appealIndex',2);
			echo(new \Template)->render('/views/admin/ombudsman_team.htm');	
		}

		public function delete_ombudsman_team($f3)
		{
			\models\ombudsman::deleteOmbudsmanTeam($_POST['id']);
			\F3::reroute('../ombudsman/team');
		}

		public function add_ombudsman_team($f3){
			$f3->set('schools', \models\ombudsman::getAllSchools());
			echo(new \Template)->render('/views/admin/ombudsman_team_add.htm');	
		}
		
		public function add_ombudsman($f3){
			$f3->set('schools', \models\ombudsman::getAllSchools());
			echo(new \Template)->render('/views/admin/ombudsman_add.htm');	
		}
		
		public function post_add_ombudsman_team($f3){
			\models\ombudsman::postOmbudsmanTeam($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['picture']["name"],$_FILES['picture']["tmp_name"]);
			\F3::reroute('../../ombudsman/team');
		}
		
		public function post_add_ombudsman($f3){
			\models\ombudsman::postOmbudsman($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['picture']["name"],$_FILES['picture']["tmp_name"]);
			\F3::reroute('../ombudsman/info');
		}

		public function change_ombudsman_team($f3){
			$f3->set('schools', \models\ombudsman::getAllSchools());
			$f3->set('member', \models\ombudsman::getMember($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/ombudsman_team_change.htm');	
		}
		
		public function change_ombudsman($f3){
			$f3->set('schools', \models\ombudsman::getAllSchools());
			$f3->set('member', \models\ombudsman::getMember($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/ombudsman_change.htm');	
		}

		public function post_change_ombudsman_team($f3){
			\models\ombudsman::postChangeOmbudsmanTeam($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['picture']["name"],$_FILES['picture']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('../../team');
		}
		
		public function post_change_ombudsman($f3){
			\models\ombudsman::postChangeOmbudsman($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['picture']["name"],$_FILES['picture']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('../info');
		}

		public function show_appeals($f3)
		{
			$data = \models\ombudsman::getOmbudsmanAppeals();

			$f3->set('appeals',$data);

			echo(new \Template)->render('/views/admin/ombudsman_appeals.htm');
		}

		public function send_answer()
		{
			$id = \F3::get("POST.id_appeal");
			$answer = \F3::get("POST.answer");
			\models\ombudsman::setOmbudsmanAnswer($id,$answer);
		}

	}

		