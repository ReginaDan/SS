<?php
	namespace controllers;
	
	class NewsAdmin  {
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		
		public function show_news($f3){
			$news = \models\news::getNewsAll();
			$f3->set('news', $news);

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/admin/news.htm');
			
		}
		public function change_new ($f3){
			$f3->set('news', \models\news::getNewsDetail($f3->get('PARAMS.id')));
			echo(new \Template)->render('/views/admin/new_change.htm');	
		}
		
		public function post_change_new($f3)
		{
			
			\models\news::postChangeNew($f3->get('PARAMS.id'), $_POST['name'], $_POST['text'], $_POST['author'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['prev_picture'], $_POST['date_created']);
			 \F3::reroute('/admin/news');
		}
		
		public function add_new($f3){
			echo(new \Template)->render('/views/admin/new_add.htm');	
		}
		
		public function post_add_new($f3){
			
			\models\news::postNew($_POST['name'], $_POST['text'], $_POST['author'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"]);
			\F3::reroute('/admin/news');
		}
		
		public function delete_new($f3)
		{
			\models\news::deleteNew($f3->get('PARAMS.id'));
			\F3::reroute('/admin/news');
		}
			
		
				
	}

		