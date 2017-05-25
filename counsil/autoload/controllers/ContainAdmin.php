<?php
	namespace controllers;
	
	class ContainAdmin  {
		
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_contain_head($f3){
			$job = "1";
			$people = \models\people::getPeople($job);
			$f3->set('people1', $people);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			
		echo(new \Template)->render('/views/admin/contain_head.htm');
			
		}
		
		public function delete_contain_head($f3)
		{
			\models\people::deleteContainHead(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/contain/head');
		}
		
		public function add_contain_head($f3){
			$f3->set('schools', \models\people::getAllSchools());
			echo(new \Template)->render('/views/admin/contain_head_add.htm');	
		}
		
		public function post_add_contain_head($f3){
			\models\people::postContainHead($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"]);
			\F3::reroute('../../contain/head');
		}

		public function change_contain_head($f3){
			$f3->set('schools', \models\people::getAllSchools());
			$f3->set('people1', \models\people::getMember($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/contain_head_change.htm');	
		}

		public function post_change_contain_head($f3){
			\models\people::postChangeContainHead($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('../../head');
		}
		
		public function show_contain_secretary($f3){
			$job = "2";
			$people = \models\people::getPeople($job);
			$f3->set('people2', $people);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

		echo(new \Template)->render('/views/admin/contain_secretary.htm');
			
		}
		
		public function delete_contain_secretary($f3)
		{
			\models\people::deleteContainSecretary(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/contain/secretary');
		}
		
		public function add_contain_secretary($f3){
			$f3->set('schools', \models\people::getAllSchools());
			echo(new \Template)->render('/views/admin/contain_secretary_add.htm');	
		}
		
		public function post_add_contain_secretary($f3){
			\models\people::postContainSecretary($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"]);
			\F3::reroute('../../contain/secretary');
		}

		public function change_contain_secretary($f3){
			$f3->set('schools', \models\people::getAllSchools());
			$f3->set('people2', \models\people::getMember($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/contain_secretary_change.htm');	
		}

		public function post_change_contain_secretary($f3){
			\models\people::postChangeContainSecretary($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('../../secretary');
		}

		
		public function show_contain_members($f3){
			$job = "3";
			$people = \models\people::getPeople($job);
			$f3->set('people4', $people);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			
		echo(new \Template)->render('/views/admin/contain_members.htm');
			
		}
		
		public function delete_contain_members($f3)
		{
			\models\people::deleteContainMembers(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/contain/members');
		}
		
		public function add_contain_members($f3){
			$f3->set('schools', \models\people::getAllSchools());
			echo(new \Template)->render('/views/admin/contain_members_add.htm');	
		}
		
		public function post_add_contain_members($f3){
			\models\people::postContainMembers($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"]);
			\F3::reroute('../../contain/members');
		}

		public function change_contain_members($f3){
			$f3->set('schools', \models\people::getAllSchools());
			$f3->set('people4', \models\people::getMember($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/contain_members_change.htm');	
		}

		public function post_change_contain_members($f3){
			\models\people::postChangeContainMembers($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('../../members');
		}

		
		public function show_contain_commitees_heads($f3){
			$job = "4";
			$people = \models\people::getPeople($job);
			$f3->set('people3', $people);

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			
		echo(new \Template)->render('/views/admin/contain_commitees_heads.htm');
			
		}
		public function delete_contain_commitees_heads($f3)
		{
			\models\people::deleteContainCommiteesHeads(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/contain/commitees_heads');
		}
		
		public function add_contain_commitees_heads($f3){
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$schools = \models\people::getAllSchools();
			$f3->set('schools', $schools);

		echo(new \Template)->render('/views/admin/contain_commitees_heads_add.htm');	
		
		}
		
		
		public function post_add_contain_commitees_heads($f3){
			\models\people::postContainCommiteesHeads($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_POST['commitee'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"]);
			\F3::reroute('../../contain/commitees_heads');
		}

		public function change_contain_commitees_heads($f3){
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$f3->set('schools', \models\people::getAllSchools());
			$f3->set('people3', \models\people::getMember($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/contain_commitees_heads_change.htm');	
		}

		public function post_change_contain_commitees_heads($f3){
			\models\people::postChangeContainCommiteesHeads($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_POST['commitee'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('../../commitees_heads');
		}
				
	}

		
						
						
			