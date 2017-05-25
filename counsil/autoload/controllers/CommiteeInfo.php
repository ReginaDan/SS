<?php
	namespace controllers;
	
	class CommiteeInfo  {
		
		public function show_commiteeinfo($f3){
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
	
			echo(new \Template)->render('/views/commitees/info/commiteeinfo.htm');
			
		}
				
	}

