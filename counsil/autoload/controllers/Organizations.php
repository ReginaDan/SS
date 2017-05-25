<?php
	namespace controllers;
	
	class Organizations  {
		
		public function show_organizations($f3){
			
			
			$organizations = \models\organizations::getOrganizations();
			$f3->set('organizations', $organizations);
			

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
						

			echo(new \Template)->render('/views/organizations/organizations.htm');
			
		}
		public function show_organizations_detail($f3){
			
			$id = $f3->get('PARAMS.id');
			$organizations = \models\organizations::getOrganizationsDetail($id);
			$f3->set('organizations', $organizations);
			
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/organizations/organizations_detail.htm');
			
		}
				
	}

