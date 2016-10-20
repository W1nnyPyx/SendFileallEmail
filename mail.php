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
				<td colspan='2' style='padding: 10px; border: #dedede 1px solid;background: #e9e9e9;'><b>Вкладка: Начало</b></td>
			</tr>
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
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>СНИЛС:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['snils']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>E-mail:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['emails']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Мобильный телефон:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['phone']}</td>
			</tr>
			<tr>
				<td colspan='2' style='padding: 10px; border: #dedede 1px solid;background: #e9e9e9;'><b>Вкладка: Основное</b></td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Социальный статус:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['soc']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Пол:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['pol']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Индекс:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['index']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Населенный пункт:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['naselpunkt']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Улица:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['ulica']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дом:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['home']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Корпус:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['korpus']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Строение:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['stroenie']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Квартира:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['kvartira']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Статус места жительства:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['status']}</td>
			</tr>
			<tr>
				<td colspan='2' style='padding: 10px; border: #dedede 1px solid;background: #e9e9e9;'><b>Вкладка: Паспорт</b></td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дата выдачи:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['datavidachi']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Код подразделения:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['kodpodrazdeleniya']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Место рождения:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['mestorojdeniya']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Индекс:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['index2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Населенный пункт:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['naselpunkt2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Улица:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['ulica2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дом:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['home2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Корпус:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['korpus2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Строение:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['stroenie2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Квартира:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['kvartira2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Статус места жительства:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['status2']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Фото паспорта:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>Фото прикреплены</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Второй документ:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['docsd']}</td>
			</tr>
			<tr>
				<td colspan='2' style='padding: 10px; border: #dedede 1px solid;background: #e9e9e9;'><b>Вкладка: Работа</b></td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Название организации:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['nazvanieorganizachiye']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>ИНН работодателя:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['innrabotodatelaya']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Отрасль:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['otrasl']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дата трудоустройства:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['datetrs']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Должность:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['dolgnost']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Количество сотрудников:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['colvosotrs']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Индекс:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['index3']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Населенный пункт:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['naselpunkt3']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Улица:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['ulica3']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дом:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['home3']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Корпус:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['korpus3']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Строение:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['stroenie3']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Офис:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['ofis']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Номер телефона организации:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['phomeorganizachiya']}</td>
			</tr>
			<tr>
				<td colspan='2' style='padding: 10px; border: #dedede 1px solid;background: #e9e9e9;'><b>Вкладка: Личная информация</b></td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Образование:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['obrazovaniye']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Семейное положение:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['semeinoepologenie']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Количество детей:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['deti']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Количество иждивенцев:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['colvoingevencov']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Ваш доход в месяц, руб.:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['doxod']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Доход семьи в месяц, руб.:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['doxodmecyac']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Расход семьи в месяц, руб.:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['rasxod']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Вид собственности:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['sobstvennosts']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Для корреспонденции использовать адрес:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['korespondentadress']}</td>
			</tr>
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Цель кредита:</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>{$_POST['chelkredit']}</td>
			</tr>

		</table>
	

	";
	$mail->AltBody = "


	
	Вкладка: Начало\r\n \r\n
	Имя: {$_POST['Name']}\r\n 
	Фамилия: {$_POST['LastName']}\r\n
	Отчество: {$_POST['otches']}\r\n
	СНИЛС: {$_POST['snils']}\r\n
	E-mail: {$_POST['emails']}\r\n
	Мобильный телефон: {$_POST['phone']}\r\n\r\n
	


	Вкладка: Основное\r\n\r\n
	Социальный статус: {$_POST['soc']}\r\n
	Пол: {$_POST['pol']}\r\n
	Индекс: {$_POST['index']}\r\n
	Населенный пункт: {$_POST['naselpunkt']}\r\n
	Улица: {$_POST['ulica']}\r\n
	Дом: {$_POST['home']}\r\n
	Корпус: {$_POST['korpus']}\r\n
	Строение: {$_POST['stroenie']}\r\n
	Квартира: {$_POST['kvartira']}\r\n
	Статус места жительства: {$_POST['status']}\r\n\r\n



	Вкладка: Паспорт\r\n\r\n
	Дата выдачи: {$_POST['datavidachi']}\r\n
	Код подразделения: {$_POST['kodpodrazdeleniya']}\r\n
	Место рождения: {$_POST['mestorojdeniya']}\r\n
	Индекс: {$_POST['index2']}\r\n
	Населенный пункт: {$_POST['naselpunkt2']}\r\n
	Улица: {$_POST['ulica2']}\r\n
	Дом: {$_POST['home2']}\r\n
	Корпус: {$_POST['korpus2']}\r\n
	Строение: {$_POST['stroenie2']}\r\n
	Квартира: {$_POST['kvartira2']}\r\n
	Статус места жительства: {$_POST['status2']}\r\n
	Фото паспорта: Фото прикреплены\r\n
	Второй документ: {$_POST['docsd']}\r\n\r\n


	Вкладка:  Работa \r\n\r\n
	Название организации: {$_POST['nazvanieorganizachiye']}\r\n
	ИНН работодателя: {$_POST['innrabotodatelaya']}\r\n
	Отрасль: {$_POST['otrasl']}\r\n
	Дата трудоустройства: {$_POST['datetrs']}\r\n
	Должность: {$_POST['dolgnost']}\r\n
	Количество сотрудников: {$_POST['colvosotrs']}\r\n
	Индекс: {$_POST['index3']}\r\n
	Населенный пункт: {$_POST['naselpunkt3']}\r\n
	Улица: {$_POST['ulica3']}\r\n
	Дом: {$_POST['home3']}\r\n
	Корпус: {$_POST['korpus3']}\r\n
	Строение: {$_POST['stroenie3']}\r\n
	Офис: {$_POST['ofis']}\r\n
	Номер телефона организации: {$_POST['phomeorganizachiya']}\r\n\r\n

	Вкладка:  Личная информация\r\n\r\n
	
	Образование: {$_POST['obrazovaniye']}\r\n
	Семейное положение: {$_POST['semeinoepologenie']}\r\n
	Количество детей: {$_POST['deti']}\r\n
	Количество иждивенцев: {$_POST['colvoingevencov']}\r\n
	Ваш доход в месяц, руб.: {$_POST['doxod']}\r\n
	Доход семьи в месяц, руб.: {$_POST['doxodmecyac']}\r\n
	Расход семьи в месяц, руб.: {$_POST['rasxod']}\r\n
	Вид собственности: {$_POST['sobstvennosts']}\r\n
	Для корреспонденции использовать адрес: {$_POST['korespondentadress']}\r\n
	Цель кредита:  {$_POST['chelkredit']}\r\n
	";

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

?>