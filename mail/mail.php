<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/htmk; charset=utf-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit";
$headers .= 'To: Admin <chernetsovda@gmail.com>' . "\r\n";
$headers .= 'From: www.caisha.eu <info@caisha.eu>' . "\r\n";
	
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['field-2']) && !empty($_POST['field'])){
		$name = stripcslashes($_POST['name']);
		$email = stripcslashes($_POST['email']);
		$tel = stripcslashes($_POST['field-2']);
		$text = stripcslashes($_POST['field']);
		$subject = 'Новый запрос';
		// Format message
		$contactMessage =
		"<html>
		<div>
		<p><strong>Имя:</strong> $name </p>
		<p><strong>Email:</strong> $email </p>
		<p><strong>Телефон:</strong> $tel </p>
		<p><strong>Текст Запроса:</strong> $text </p>
		</div>
		</html>
		";
		$response = (mail('chernetsovda@gmail.com', $subject, $contactMessage, $headers) ) ? "success" : "failure" ;
		echo($response);
	}
}