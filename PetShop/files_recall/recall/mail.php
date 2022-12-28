<?php 

require_once('D:\OSPanel\domains\PetShop\files_recall\recall\phpmailer\PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$email=filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'semn.lebedev.99.99@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'ephgPjr5yPTSgS6Jw4ft'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('semn.lebedev.99.99@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('mamontedinorog@yandex.by');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body = "Данный пользователь подписался на новости: ".$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Нет';
} else {
	header('Location: /HTML/index.php'); 
}
?>