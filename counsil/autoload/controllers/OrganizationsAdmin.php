<?php
	namespace controllers;
	
	class OrganizationsAdmin  {
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		
		public function show_organizations_heads($f3){
			
			$directors = \models\organizations::getDirectors();
			$f3->set('directors', $directors);
			
			$organizations = \models\organizations::getOrganizations();
			$f3->set('organizations', $organizations);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
						
			

			echo(new \Template)->render('views/admin/organizations_heads.htm');
			
		}
		
		public function show_organizations_list($f3){
			
			$organizations = \models\organizations::getOrganizations();
			$f3->set('organizations', $organizations);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
						
			

			echo(new \Template)->render('views/admin/organizations_list.htm');
			
		}
		
		public function add_organization($f3){
			
			$directors = \models\organizations::getDirectors();
			$f3->set('directors', $directors);
			
			echo(new \Template)->render('/views/admin/organizations_list_add.htm');	
		}
		
		public function post_add_organization($f3){
			
			\models\organizations::postOrganization($_POST['name'], $_POST['description'], $_POST['director'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"]);
			
			 \F3::reroute('/admin/organizations/list');
		}
		
		public function delete_organization($f3)
		{
			\models\organizations::deleteOrganization($f3->get('PARAMS.id'));
			\F3::reroute('/admin/organizations/list');
		}
		
		public function change_organization ($f3){
			
			$directors = \models\organizations::getDirectors();
			$f3->set('directors', $directors);

			
			$f3->set('organizations', \models\organizations::getOrganizationsDetail($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/organizations_list_change.htm');	
		}
		
		public function post_change_organization($f3)
		{
			
			\models\organizations::postChangeOrganization($f3->get('PARAMS.id'), $_POST['name'], $_POST['description'], $_POST['director'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"]);
			 \F3::reroute('/admin/organizations/list');
		}
		
		public function delete_organizations_head($f3)
		{
			\models\organizations::deleteOrganizationsHead(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/organizations/heads');
		}
		
		public function add_organizations_head($f3){
			echo(new \Template)->render('/views/admin/organizations_heads_add.htm');	
		}
		
		public function post_add_organizations_head($f3){
			\models\organizations::postOrganizationsHead($_POST['firstname'],$_POST['secondname'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"]);
			\F3::reroute('/admin/organizations/heads');
		}
		
		public function change_organizations_head ($f3){
						
			$f3->set('directors', \models\organizations::getDirectorById($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/organizations_heads_change.htm');	
		}
		
		public function post_change_organizations_head($f3){
			
			\models\organizations::postChangeOrganizationsHead($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo']);
			\F3::reroute('/admin/organizations/heads');
		}


		

				
	}

