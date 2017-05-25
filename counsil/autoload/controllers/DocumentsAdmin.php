<?php
	namespace controllers;
	
	class DocumentsAdmin  {
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_documents($f3){
			
		$cat = \models\documents::getDocumentsCategory();
		$f3->set('categories', $cat);
		 
		
		$documents = \models\documents::getDocumentsAll();
		\F3::set('documents', $documents);
		
				
		$commitees = \models\commitees::getCommiteesByLink($link);
		$f3->set('commitees', $commitees);
			
		$allcommitees = \models\commitees::getAllCommitees();
		$f3->set('commitees', $allcommitees);
			
		$departments = \models\locals::getDepartments($link);
		$f3->set('departments', $departments);
			
	
			echo(new \Template)->render('/views/admin/documents.htm');
			
		}
		
		public function show_documents_categories($f3){
			
			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			$f3->set("documentsgetter", 
			function ($catid) 
				{ 
				  $documents = \models\documents::getDocumentsByCategory($catid);
			\F3::set('documents', $documents);
		
			foreach($documents as $doc) {
				echo("<li><a href=".$doc["dlink"]."><i class='fa fa-file-text-o' aria-hidden='true'></i>".$doc["dname"]."</a></li>
");
			}
			
});		

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
	
			echo(new \Template)->render('/views/admin/documents_categories_list.htm');
			
		}
		
		public function document_change ($f3){
			
			
			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			
			$f3->set('documents', \models\documents::getDocumentById($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/documents_change.htm');	
		}
		
		public function post_document_change($f3){
			\models\documents::postChangeDocument($f3->get('PARAMS.id'), $_POST['name'], $_POST['category'], $_FILES['file']["name"], $_FILES['file']["tmp_name"] );
			\F3::reroute('/admin/documents/list');
		}
		
		public function delete_document($f3)
		{
			\models\documents::deleteDocument($f3->get('PARAMS.id'));
			\F3::reroute('/admin/documents/list');
		}
		
		public function add_document($f3){
			
			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			
			$f3->set('documents', \models\documents::getDocuments());
			echo(new \Template)->render('/views/admin/documents_add.htm');	
		}
		
		public function post_add_document($f3){
			\models\documents::postDocument($_POST['name'], $_POST['category'], $_FILES['file']["name"], $_FILES['file']["tmp_name"]);
			\F3::reroute('/admin/documents/list');
		}

			

		
		public function delete_documents_category($f3)
		{
			\models\documents::deleteCategory($f3->get('PARAMS.id'));
			\F3::reroute('/admin/documents/categories/list');
		}
		
		public function post_documents_category_change($f3){
			\models\documents::postChangeCategory($f3->get('PARAMS.id'), $_POST['name']);
			\F3::reroute('/admin/documents/categories/list');
		}
				
		public function documents_category_change ($f3){
			$f3->set('categories', \models\documents::getCategoryById($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/documents_categories_list_change.htm');	
		}
		public function add_documents_category($f3){
			$f3->set('categories', \models\documents::getDocumentsCategory());
			echo(new \Template)->render('/views/admin/documents_categories_list_add.htm');	
		}
		public function post_add_documents_category($f3){
			\models\documents::postCategory($_POST['name']);
			\F3::reroute('/admin/documents/categories/list');
		}
		

		
		
				
	}

		
