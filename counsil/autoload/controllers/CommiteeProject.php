<?php
	namespace controllers;
	
	class CommiteeProject  {
		
		public function show_commiteeProject($f3){
			
			$offset = 10;
			if(\F3::get('PARAMS.offset')!=null){
				$offset = \F3::get('PARAMS.offset') + 10;
			}
			$offsetBack = $offset - 10;
			$f3->set('offsetBack',$offsetBack);
			
			$f3->set('offset',$offset);
						
			$link = $f3->get('PARAMS.link');
			$f3->set('link', $link);
			
			$projects = \models\commitees::getCommiteesProjectsByLink($link);
			$f3->set('projects', $projects);
												
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments();
			$f3->set('departments', $departments);			
			

			echo(new \Template)->render('/views/commitees/projects/commiteeproject.htm');
			
		}
		public function show_commiteesproject_offset($f3){
			$offset = \F3::get('PARAMS.offset')+10;
			$f3->set('offset',$offset);
			
			$link = $f3->get('PARAMS.link');
			$f3->set('link', $link);

			$projects = \models\commitees::getComProjOffset($link, $offset);
			$f3->set('projects', $projects);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/commitees/projects/commiteeproject.htm');
			
		}
				
	}

