<?php
	namespace controllers;
	class _front 
	{
		function __construct()
		{
			
		}
		function main($f3) 
		{
			//$f3->set('BASE','views/index.htm');
			$f3->set('BASE','views/index');
			$template = new \template;
			//echo $template->render('views/base/index.htm');
			echo $template->render('views/index.htm');
		}
		
	}
	
