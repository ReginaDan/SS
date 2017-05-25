<?php
	namespace controllers;
	
	class Documents  {
		
		public function show_documents($f3){
			
			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			$f3->set("documentsgetter", 
			function ($catid) 
				{ 
				  $documents = \models\documents::getDocumentsByCategory($catid);
			\F3::set('documents', $documents);
		
			foreach($documents as $doc) {
				echo("<li><a href=/counsil/ui/files/".$doc["dlink"]."><i class='fa fa-file-text-o' aria-hidden='true'></i>".$doc["dname"]."</a></li>
");
			}
			
});		

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
	
			echo(new \Template)->render('/views/documents/documents.htm');
			
		}
		
		public function show_documents_category_detail($f3){
			$cid = $f3->get('PARAMS.id');
		
			
            $documents = \models\documents::getDocumentsByCategory($cid);
			\F3::set('documents', $documents);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
	
			echo(new \Template)->render('/views/documents/documents_category_detail.htm');
			
		}

				
	}

		
