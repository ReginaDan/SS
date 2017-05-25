<?php
	namespace controllers;
	
	class Contain  {
		
		public function show_contain($f3){
			$job = "1";
			$people = \models\people::getPeople($job);
			$f3->set('people1', $people);
			
			$job = "2";
			$people = \models\people::getPeople($job);
			$f3->set('people2', $people);
			
			$job = "4";
			$people = \models\people::getPeople($job);
			$f3->set('people3', $people);
			
			$job = "3";
			$people = \models\people::getPeople($job);
			$f3->set('people4', $people);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

		echo(new \Template)->render('/views/contain/contain.htm');
			
		}
				
	}

		
