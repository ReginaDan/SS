<?php
	namespace controllers;
	
	class About  {
		
		public function show_about($f3){
			
			$council=\models\council::getCouncil();
			$f3->set('council', $council);
			
			$missions = \models\missions::getMissions();
			$f3->set('missions', $missions);
									
			$partners=\models\partners::getPartners();
			$f3->set('partners', $partners);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments();
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/about/about.htm');
			
		}
				
	}

		
