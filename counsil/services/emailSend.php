<?php
public function postMail($mailRecepient, $subject, $text){
	//$email = \F3::get('DB')->exec("SELECT admin_email FROM competition LIMIT 1");
	
	$smtp = new \SMTP ('ssl://smtp.yandex.ru', 465 , null, 'hse.council@yandex.ru', 'test1762' );
	//die($email[1]['admin_email']); 
	$smtp->set('To', '"Contact Name" <$mailRecepient>'); 
	$smtp->set('From', '"Студсовет ВШЭ" <hse.council@yandex.ru>'); 
	$smtp->set('Subject', '$subject'); 
	$smtp->send("$text");
			}