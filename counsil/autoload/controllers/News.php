<?php
	namespace controllers;
	
	class News  {
		
		
		public function show_news($f3){
			$news = \models\news::getNews();
			$f3->set('news', $news);
			
			$offset = 10;
			if(\F3::get('PARAMS.offset')!=null){
				$offset = \F3::get('PARAMS.offset') + 10;
			}
			$offsetBack = $offset - 10;
			$f3->set('offsetBack',$offsetBack);
			
			$f3->set('offset',$offset);

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/news/news.htm');
			
		}
		
		public function show_news_offset($f3){
			$news = \models\news::getNewsOffset(\F3::get('PARAMS.offset'));
			$f3->set('news', $news);
			
			$offset = \F3::get('PARAMS.offset')+10;
			$f3->set('offset',$offset);

			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			

			echo(new \Template)->render('/views/news/news.htm');
			
		}

		public function show_news_detail($f3){
			$id = $f3->get('PARAMS.id');
			$news = \models\news::getNewsDetail($id);
			$f3->set('news', $news);
						
			$commitees = \models\commitees::getCommiteesByLink($link);
			$f3->set('commitees', $commitees);
			
			$allcommitees = \models\commitees::getAllCommitees();
			$f3->set('commitees', $allcommitees);
			
			$departments = \models\locals::getDepartments($link);
			$f3->set('departments', $departments);
			
			$same_news=\models\news::getSameNews();
			$f3->set('same_news', $same_news);
			

			echo(new \Template)->render('/views/news/news_detail.htm');
			
		}
				
	}

		