<?php
	namespace controllers;
	
	class LocalsAdmin  {
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_locals_members($f3){
			$link = $f3->get('PARAMS.link');
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
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			
		echo(new \Template)->render('/views/admin/locals_members.htm');
		}
		
		public function show_locals_blogs($f3){
			$link = $f3->get('PARAMS.link');
			
			$localnews = \models\locals::getLocalsNewsAll($link);
			$f3->set('bnews', $localnews);
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			
		echo(new \Template)->render('/views/admin/locals_blogs.htm');
			
		}
		
		
		public function change_local_new ($f3){
			$f3->set('news', \models\locals::getNewsDetail($f3->get('PARAMS.id')));
			$f3->set('link',$f3->get('PARAMS.link'));
			echo(new \Template)->render('/views/admin/locals_blogs_change.htm');	
		}
		
		public function post_change_local_new($f3)
		{

			\models\locals::postChangeNew($f3->get('PARAMS.id'), $_POST['name'], $_POST['text'], $_POST['author'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['prev_picture'], $_POST['loclink'] );
			 \F3::reroute('/admin/locals/blogs/link/'.$_POST['loclink']);
		}
		
		public function add_local_new($f3){
			
			$link = $f3->get('PARAMS.link');
			
			$localnews = \models\locals::getLocalsNewsAll($link);
			$f3->set('bnews', $localnews);
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);


			echo(new \Template)->render('/views/admin/locals_blogs_add.htm');	
		}
		
		public function post_add_local_new($f3){
			\models\locals::postNew($_POST['name'], $_POST['text'], $_POST['author'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['loclink']);
			\F3::reroute('/admin/locals/blogs/link/'.$_POST['loclink']);
		}
		
		public function delete_local_new($f3)
		{
			\models\locals::deleteNew($f3->get('PARAMS.id'));
			\F3::reroute('/admin/locals/blogs/link/'.$f3->get('PARAMS.link'));
		}

		
		public function show_locals_documents($f3){
			
			
			$link = $f3->get('PARAMS.link');
			$f3->set('link', $link);	
					
			$localdocs = \models\locals::getLocalsDocuments($link);
			$f3->set('localdocs', $localdocs);			
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

			
		echo(new \Template)->render('/views/admin/locals_documents.htm');
			
		}	
		
		public function change_local_document ($f3){
				
			$link=$f3->get('PARAMS.link');
			$f3->set('link', $link);
			
			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			
			$f3->set('documents', \models\documents::getDocumentById($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/locals_documents_change.htm');	
		}
		
		public function post_change_local_document($f3){
			\models\locals::postChangeDocument($f3->get('PARAMS.id'), $_POST['name'], $_POST['category'], $_POST['loclink'], $_FILES['file']["name"], $_FILES['file']["tmp_name"] );
			\F3::reroute('/admin/locals/documents/link/'.$_POST['loclink']);
		}
		
		public function delete_local_document($f3)
		{
			\models\locals::deleteDocument($f3->get('PARAMS.id'));
			\F3::reroute('/admin/locals/documents/link/'.$f3->get('PARAMS.link'));
		}
		
		public function add_local_document($f3){
			
			$link=$f3->get('PARAMS.link');
			$f3->set('link', $link);

			$cat = \models\documents::getDocumentsCategory();
			$f3->set('categories', $cat);
			
			$f3->set('documents', \models\documents::getDocuments());
			echo(new \Template)->render('/views/admin/locals_documents_add.htm');	
		}
		
		public function post_add_local_document($f3){
			\models\locals::postDocument($_POST['name'], $_POST['category'],$_POST['loclink'], $_FILES['file']["name"], $_FILES['file']["tmp_name"]);
			\F3::reroute('/admin/locals/documents/link/'.$_POST['loclink']);
		}


				
		public function show_locals_list($f3){
			$link = $f3->get('PARAMS.link');
			
			$local = \models\locals::getLocal();
			$f3->set('local', $local);
			
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);

		echo(new \Template)->render('/views/admin/locals_list.htm');
			
		}		
		
		public function delete_local($f3)
		{
			\models\locals::deleteLocal($f3->get('PARAMS.id'));
			\F3::reroute('/admin/locals/list');
		}
		
		public function post_local_change($f3){
			\models\locals::postChangeLocal($f3->get('PARAMS.id'), $_POST['name'], $_POST['link']);
			\F3::reroute('/admin/locals/list');
		}
				
		public function local_change ($f3){
			$f3->set('locals', \models\locals::getLocalById($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/locals_list_change.htm');	
		}
		public function add_local($f3){
			$f3->set('locals', \models\locals::getLocal());
			echo(new \Template)->render('/views/admin/locals_list_add.htm');	
		}
		public function post_add_local($f3){
			\models\locals::postLocal($_POST['name'],$_POST['link']);
			\F3::reroute('/admin/locals/list');
		}
		
		
		public function post_add_local_head($f3){
			\models\locals::postLocalHead($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"], $_POST['local']);
			\F3::reroute('/admin/locals/members/link/'.$f3->get('PARAMS.link'));
		}

		public function change_local_head($f3){
			
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);

			$schools= \models\people::getAllSchools();
			$f3->set('schools', $schools);
			
			$job = "5";
			$head=\models\locals::getLocals($job, $link);
			$f3->set('head', $head);
			echo(new \Template)->render('/views/admin/local_head_change.htm');	
		}

		public function post_change_local_head($f3){
			
			\models\locals::postChangeLocalHead($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo'], $_POST['loclink']);
			
			\F3::reroute('/admin/locals/members/link/'.$_POST['loclink']);
		}
		
		public function delete_local_head($f3)
		{
			\models\locals::deleteLocalHead(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/locals/members/link/'.$f3->get('PARAMS.link'));
		}
		
		public function add_local_head($f3){
			
			$link = $f3->get('PARAMS.link');
			
			$job = "5";
			$locals = \models\locals::getLocals($job, $link);
			$f3->set('head', $locals);
			
			$schools = \models\locals::getSchoolsByLocalLink($link);
			$f3->set('schools', $schools);
							
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			

			echo(new \Template)->render('/views/admin/local_head_add.htm');	
		}
		
		
		public function post_add_local_secretary($f3){
			\models\locals::postLocalSecretary($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"], $_POST['local']);
			\F3::reroute('/admin/locals/members/link/'.$f3->get('PARAMS.link'));
		}

		public function change_local_secretary($f3){
			
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);

			$schools= \models\people::getAllSchools();
			$f3->set('schools', $schools);
			
			
			$job = "6";
			$secretary=\models\locals::getLocals($job, $link);
			$f3->set('secretary', $secretary);
			echo(new \Template)->render('/views/admin/local_secretary_change.htm');	
		}

		public function post_change_local_secretary($f3){
			\models\locals::postChangeLocalSecretary($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo'], $_POST['loclink']);
			
			\F3::reroute('/admin/locals/members/link/'.$_POST['loclink']);
		}
		
		public function delete_local_secretary($f3)
		{
			\models\locals::deleteLocalSecretary(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/locals/members/link/'.$f3->get('PARAMS.link'));
		}
		
		public function add_local_secretary($f3){
			
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);
			
			$job = "6";
			$secretary = \models\locals::getLocals($job, $link);
			$f3->set('secretary', $secretary);
			
			$schools = \models\locals::getSchoolsByLocalLink($link);
			$f3->set('schools', $schools);
							
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			

			echo(new \Template)->render('/views/admin/local_secretary_add.htm');	
		}
		
		public function post_add_local_member($f3){
			\models\locals::postLocalMember($_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']['name'],$_FILES['photo']["tmp_name"], $_POST['local']);
			\F3::reroute('/admin/locals/members/link/'.$f3->get('PARAMS.link'));
		}

		public function change_local_member($f3){
			
			$link = $f3->get('PARAMS.link');
			\F3::set('link', $link);

			$schools= \models\people::getAllSchools();
			$f3->set('schools', $schools);
			
			
			$job = "7";
			$member=\models\locals::getLocalsPerson(\F3::get("PARAMS.id"));
			
			$f3->set('member', $member);
			echo(new \Template)->render('/views/admin/local_member_change.htm');	
		}

		public function post_change_local_member($f3){
			\models\locals::postChangeLocalMember($f3->get('PARAMS.id'),$_POST['firstname'],$_POST['secondname'],$_POST['faculty'],$_POST['email'],$_POST['vk'],$_POST['facebook'],$_POST['twitter'],$_FILES['photo']["name"],$_FILES['photo']["tmp_name"], $_POST['prev_photo'], $_POST['loclink']);
			
			\F3::reroute('/admin/locals/members/link/'.$_POST['loclink']);
		}
		
		public function delete_local_member($f3)
		{
			\models\locals::deleteLocalMember(\F3::get("PARAMS.id"));
			\F3::reroute('/admin/locals/members/link/'.$f3->get('PARAMS.link'));
		}
		
		public function add_local_member($f3){
			
			$link = $f3->get('PARAMS.link');
			
			$job = "7";
			$member = \models\locals::getLocals($job, $link);
			$f3->set('member', $member);
			
			$schools = \models\locals::getSchoolsByLocalLink($link);
			$f3->set('schools', $schools);
							
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$local = \models\locals::getLocalsByLink($link);
			$f3->set('local', $local);
			

			echo(new \Template)->render('/views/admin/local_member_add.htm');	
		}



		



		
		


	}

		
