<?php
if( $_POST ){

	// require("PHPMailer/PHPMailerAutoload.php");
	require_once('PHPMailer/class.smtp.php'); 
	require_once('PHPMailer/class.phpmailer.php'); 

	$mail = new PHPMailer;

	$mail->isSMTP();

	$mail->Host = 'smtp.yandex.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'sraki.makaki'; // логин от вашей почты
	$mail->Password = 'Bma360158'; // пароль от почтового ящика
	$mail->SMTPSecure = 'ssl';
	$mail->Port = '465';

	$mail->CharSet = 'UTF-8';
	$mail->From = 'sraki.makaki@yandex.ru'; // адрес почты, с которой идет отправка
	$mail->FromName = 'ХелпСервис'; // имя отправителя
	$mail->addCC('w1nnypyx@yandex.ru');

	$mail->isHTML(true);

	$mail->Subject = "Новая заявка с сайта: ХелпСервис";

	// если был файл, то прикрепляем его к письму
	// if(isset($_FILES['attachfile1']))
	// {
	// 	if($_FILES['attachfile1']['error'] == 0)
	// 	{
	// 		$mail->AddAttachment($_FILES['attachfile1']['tmp_name'],$_FILES['attachfile1']['name']);
	// 	}
	// }
	if (!empty($_FILES['attachfile']['name'][0])) {
	           foreach ($_FILES['attachfile']['name'] as $key => $value) {
	               $out_files[] = array("name"=>$_FILES['attachfile']['name'][$key], "tmp_name" => $_FILES['attachfile']['tmp_name'][$key]);
	           }
	           $filesSend = true;
	       } else {
	           $filesSend = false;    
	       }
	       if ($filesSend) {
	           foreach ($out_files as $k=>$v) {
	               $mail->AddAttachment($out_files[$k]['tmp_name'], $out_files[$k]['name']);
	           }
	       }
	
	$mail->Body = "
		<table style='width: 100%;'>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['Name']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Фамилия:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['LastName']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Отчество:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['otches']}</td>
			</tr>
		</table>
	

	";
	$mail->AltBody = "Имя: {$_POST['name']}\r\n Email: {$_POST['email']}\r\n Сообщение: {$_POST['body']}";

	// $mail->SMTPDebug = 1;

	if( $mail->send() ){
		$answer = '1';
	}else{
		$answer = '0';
		// echo 'Письмо не может быть отправлено. ';
		// echo 'Ошибка: ' . $mail->ErrorInfo;
	}
	die( $answer );
}





























// $method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
// $c = true;
// if ( $method === 'POST' ) {

// 	$project_name = "PROJECTNAME";
// 	$admin_email  = "w1nnypyx@yandex.ru";
	// $admin_email  = "mishamisha1987@yandex.ru, advancedmarketing.ru@gmail.com";
// 	$form_subject = "Новая заявка с сайта: projectname";

// 	foreach ( $_POST as $key => $value ) {
// 		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
// 			$message .= "
// 			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
// 			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
// 		</tr>
// 		";
// 	}
// }
// } else if ( $method === 'GET' ) {

// 	$project_name = "PROJECTNAME";
// 	$admin_email  = "mishamisha1987@yandex.ru, advancedmarketing.ru@gmail.com";
// 	$form_subject = "Новая заявка с сайта: projectname";

// 	foreach ( $_GET as $key => $value ) {
// 		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
// 			$message .= "
// 			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
// 			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
// 		</tr>
// 		";
// 	}
// }
// }

// $message = "<table style='width: 100%;'>$message</table>";

// function adopt($text) {
// 	return '=?UTF-8?B?'.base64_encode($text).'?=';
// }

// $headers = "MIME-Version: 1.0" . PHP_EOL .
// "Content-Type: text/html; charset=utf-8" . PHP_EOL .
// 'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
// 'Reply-To: '.$admin_email.'' . PHP_EOL;

// mail($admin_email, adopt($form_subject), $message, $headers );



?>