<?php

if (!empty($_POST['name']) and !empty($_POST['email'])){

	$theme = 'БИЗНЕС. ЭМОЦИИ. ЛЮБОВЬ';
	$name = $_POST['name'];
	$email = $_POST['email'];

	$to = htmlspecialchars($email);
	$letter = 'Здравствуйте, '.htmlspecialchars($name).'!<br/><br/>
	Имя: '.htmlspecialchars($name).'<br/>
	Email: '.htmlspecialchars($email).'<br/>
	Спасибо Вам за отправленный запрос!<br/><br/>
	С уважением,<br/>
	Михаил Филяев<br/>';

	$to2 = 'info@psy20.com';
	$letter2 = 'ПОЛЕЗНЫЙ БОНУС запрошен<br/><br/>
	Имя: '.htmlspecialchars($name).'<br/>
	Email: '.htmlspecialchars($email).'<br/>';

	$headers = "content-type: text/html; charset=utf-8\r\n";
	$headers .="From: 'Михаил Филяев'";
	
	mail($to, $theme , $letter, $headers);
	mail($to2, $theme , $letter2, $headers);
	header("location: ../index.html");

 	echo "SUCCESS!";

}else{
	 echo "ERROR!";
}

?>