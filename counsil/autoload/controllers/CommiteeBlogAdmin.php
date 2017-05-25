<?php
	namespace controllers;
	
	class CommiteeBlogAdmin  {
		
		
		function __construct(){
      $auth = \F3::get("auth");
      if (!$auth->check()) {
        \F3::reroute("counsil/admin/login");
      } else {
        \F3::set("USER",\models\user::get_user(\F3::get("COOKIE.token")));
        \F3::set("USER_ID", \F3::get("USER")->id);
      }
    }

		
		public function show_commiteeBlog($f3){
			$link = $f3->get('PARAMS.link');
			
			$blog=\models\commitees::getCommiteesBlogs($link);
			$f3->set('blog', $blog);
			
			$blognews=\models\commitees::getCommiteesBlogsNews($link);
			$f3->set('bnews', $blognews);
				
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
	
			echo(new \Template)->render('/views/admin/commitees_blogs.htm');
			
		}
		
		public function add_commitees_blog($f3){
			
			$link = $f3->get('PARAMS.link');
		
			$blognews = \models\commitees::getCommiteesBlogsNews($link);
			$f3->set('blognews', $blognews);
			
									
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			
			echo(new \Template)->render('/views/admin/commitees_blogs_add.htm');	
		}
		
		public function post_add_commitees_blog($f3){
			\models\commitees::postCommiteeBlogNews($_POST['name'], $_POST['text'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"], $_POST['commitee']);
			\F3::reroute('/admin/commitees/blogs/link/'.$_POST['commitee']);
		}
		
		public function delete_commitees_blog($f3)
		{
			\models\commitees::deleteCommiteesBlogNew($f3->get('PARAMS.id'));
			\F3::reroute('/admin/commitees/blogs/link/'.$f3->get('PARAMS.link'));
		}	
		
		public function change_commitees_blog ($f3){
			$link = $f3->get('PARAMS.link');

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);

			$blognews = \models\commitees::getCommiteesBlogsNews($link);
			$f3->set('blognews', $blognews);
			
			echo(new \Template)->render('/views/admin/commitees_blogs_change.htm');	
		}
		
		public function post_change_commitees_blog($f3)
		{
			
			\models\commitees::postChangeCommiteeBlogNews($f3->get('PARAMS.id'), $_POST['name'], $_POST['text'], $_FILES['picture']["name"], $_FILES['picture']["tmp_name"],$_POST['prev_picture'], $_POST['commitee']);
			 \F3::reroute('/admin/commitees/blogs/link/'.$_POST['commitee']);
		}
				
	}


		
		

