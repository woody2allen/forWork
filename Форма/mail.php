<?php

$name = trim($_POST['name']);
$email = trim($_POST['mail']);
$phone = trim($_POST['phone']);
$tariff = trim($_POST['tariffs']);

//Если ошибок нет, отправить email

$mail_header = "MIME-Version: 1.0\r\n";
$mail_header.= "Content-type: text/html; charset=UTF-8\r\n";
$mail_header .= "From: Waytostart Landing <landing@waytostart.ru>";

$recipient= 'info@waytostart.ru, sales@waytostart.ru';
//$recipient= 'phemistokl@gmail.com';
$subject = 'Сообщение с сайта WayToStart/landing';
$message = '<b>Имя</b>: '.$name.'<br>';
$message.= '<b>Email</b>: '.$email.'<br>';
$message.= '<b>Телефон</b>: '.$phone.'<br>';
$message.= '<b>Тариф</b>: '.$tariff.'<br>';


if (mail($recipient, $subject, $message, $mail_header))
echo 'Письмо отправлено';
else echo 'Письмо не отправлено';

?>