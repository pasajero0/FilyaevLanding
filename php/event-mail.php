<?php

if (!empty($_POST['name']) and !empty($_POST['email'])){

	$theme = 'Регистрация на мероприятие "Бизнес. Любовь. Эмоции"';
	$name = $_POST['name'];
	$email = $_POST['email'];

	$to = htmlspecialchars($email);
	$letter = 'Здравствуйте, '.htmlspecialchars($name).'!<br/><br/>
	Ждём Вас 8 июля в 00:00 по адресу г. Москва, пр. Днепровский, 4, зал "Классный".<br/><br/>
	С уважением,<br/>
	Михаил Филяев<br/>';

	$to2 = 'malyshevamv87@gmail.com';
	$letter2 = 'Новый участник<br/><br/>
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