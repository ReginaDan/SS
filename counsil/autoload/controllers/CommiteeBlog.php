<?php
	namespace controllers;
	
	class CommiteeBlog  {
		
		public function show_commiteeBlog($f3){
			$offset = 10;
			if(\F3::get('PARAMS.offset')!=null){
				$offset = \F3::get('PARAMS.offset') + 10;
			}
			$offsetBack = $offset - 10;
			$f3->set('offsetBack',$offsetBack);
			
			$f3->set('offset',$offset);
						
			$link = $f3->get('PARAMS.link');
			$f3->set('link', $link);

			
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
	
			echo(new \Template)->render('/views/commitees/blogs/commiteeblog.htm');
			
		}
		
		public function show_commiteeBlog_offset($f3){
			$offset = \F3::get('PARAMS.offset')+10;
			$f3->set('offset',$offset);
			
			$link = $f3->get('PARAMS.link');
			$f3->set('link', $link);

			$blog=\models\commitees::getCommiteesBlogs($link);
			$f3->set('blog', $blog);
			
			$blognews=\models\commitees::getCommiteesBlogsNewsOffset($link,$offset);
			$f3->set('bnews', $blognews);

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/commitees/blogs/commiteeblog.htm');
			
		}
				
		
		public function show_commiteeBlogNewsDetail($f3){
			
			$link = $f3->get('PARAMS.link');
			$f3->set('link',$link);
			
			$id = $f3->get('PARAMS.id');
			$f3->set('id',$id);
			
			$blog=\models\commitees::getCommiteesBlogs($link);
			$f3->set('blog', $blog);
			
			$blognews=\models\commitees::getCommiteesBlogsNews($link,$id);
			$f3->set('bnews', $blognews);
				
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitee', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
	
			echo(new \Template)->render('/views/commitees/blogs/commiteeblog_detail.htm');
			
		}
		
		
				
	}

