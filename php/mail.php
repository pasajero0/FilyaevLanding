<?php
if (!empty($_POST['name']) and !empty($_POST['email'])){

	$theme = 'ТЕСТ РАБОТЫ ФОРМЫ';
	$name = $_POST['name'];
	$email = $_POST['email'];

	$to = .htmlspecialchars($email);
	$letter = 'Здравствуйте, '.htmlspecialchars($name).'<br/><br/>
	Спасибо Вам за отправленный запрос!'

	$headers = "content-type: text/html; charset=utf-8\r\n";	
	$headers .= "От Михаила Филяева";
	mail($to, $theme , $letter, $headers);
	// header("location: ../contacts.html");
	echo "SUCCESS!";
}else{
 echo "ERROR!";
}
?>