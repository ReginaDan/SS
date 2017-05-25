<?php
	namespace controllers;
	
	class Locals  {
		
		public function show_locals($f3){
			
			$id = $f3->get('PARAMS.id');
			$f3->set('id',$id);
			$link = $f3->get('PARAMS.link');
			$f3->set('link',$link);
			
			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			$f3->set("documentsgetter", 
			function ($catid, $link) 
				{ 
					
				  $documents = \models\locals::getLocalsDocumentsByCat($catid, $link);
				 
			\F3::set('documents', $documents);
		
			foreach($documents as $doc) {
				echo("<li><a href=/counsil/ui/files/".$doc["dlink"]."><i class='fa fa-file-text-o' aria-hidden='true'></i>".$doc["name"]."</a></li>
");
			}
			
});		

		
			
			$job = "5";
			$locals = \models\locals::getLocals($job, $link);
			$f3->set('head', $locals);
			
			$job = "6";
			$locals = \models\locals::getLocals($job, $link);
			$f3->set('secretary', $locals);
						
			$job = "7";
			$locals = \models\locals::getLocals($job, $link);
			$f3->set('member', $locals);
						
			$schools = \models\locals::getSchoolsByLocalLink($link);
			$f3->set('schools', $schools);
							
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$localnews = \models\locals::getLocalsNews($link);
			$f3->set('bnews', $localnews);
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			
		echo(new \Template)->render('/views/locals/locals.htm');
			
		}
		
		
		public function show_LocalsNewsDetail($f3){
			
			$link = $f3->get('PARAMS.link');
			$f3->set('link',$link);
			
			$id = $f3->get('PARAMS.id');
			$f3->set('id',$id);
			
			$blog=\models\locals::getLocalsNewsAll($link);
			$f3->set('blog', $blog);
			
			$blognews=\models\locals::getLocalsNewsById($link,$id);
			$f3->set('bnews', $blognews);
				
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
	
			echo(new \Template)->render('/views/locals/localblog_detail.htm');
			
		}

				
	}

		
