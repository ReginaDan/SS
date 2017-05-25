<?php
	namespace controllers;
	
	class Ombudsman  {
		
		
		public function show_ombudsman($f3){
			$job = "9";
			$ombudsman = \models\ombudsman::getOmbudsman($job);
			$f3->set('ombudsman', $ombudsman);
			
			$job = "8";
			$ombudsman = \models\ombudsman::getOmbudsman($job);
			$f3->set('member', $ombudsman);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$allocution=\models\ombudsman::getOmbudsmanAllocution($job);
			$f3->set('allocution', $allocution);

			\F3::set('appealIndex',2);
			echo(new \Template)->render('/views/ombudsman/ombudsman.htm');	
		}

	}

		