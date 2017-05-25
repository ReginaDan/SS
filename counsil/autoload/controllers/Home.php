<?php
	namespace controllers;
	
	class Home  {
		
		
		public function show_content($f3){
			$documents = \models\documents::getDocuments();
			$f3->set('documents', $documents);
			
			$initiatives = \models\initiatives::getInitiatives();
			$f3->set('initiatives', $initiatives);
			
			$news = \models\news::getNews();
			$f3->set('news', $news);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments();
			$f3->set('departments', $departments);
			

			\F3::set('appealIndex',1);
			echo(new \Template)->render('/views/index.htm');			
		}

		public function send_appeal()
		{
			if(isset($_POST['emailAddress'])){
				$emailAddress = \F3::get("POST.emailAddress");
				\models\appeal::addToDispatch($emailAddress);
				die();

			}
			else{
				$nameSender = \F3::get("POST.name");
				$surnameSender = \F3::get("POST.surname");
				$appealText = \F3::get("POST.appeal");
				$idCategory = \F3::get("POST.id_category");
				$email = \F3::get("POST.email");

				\models\appeal::appelToSS($nameSender,$surnameSender,$appealText,$idCategory,$email);
			}
			
		}
				
	}

		
