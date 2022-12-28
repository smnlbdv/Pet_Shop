<?php 




// require_once('phpmailer/PHPMailerAutoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';

mail('mamontedinorog@yandex.by', 'Тема письма', 'Текст письма', 'From: semn.lebedev.99.99@mail.ru');

// $email = $_POST['email_email'];

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'semn.lebedev.99.99@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
// $mail->Password = '4g3-Hpa-mUh-Skr'; // Ваш пароль от почты с которой будут отправляться письма
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

// $mail->setFrom('semn.lebedev.99.99@mail.ru'); // от кого будет уходить письмо?
// $mail->addAddress('mamontedinorog@yandex.by');     // Кому будет уходить письмо 
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Заявка с тестового сайта';
// $mail->Body = 'Этот васька оставил заявку, его почта ' . $email;
// $mail->AltBody = '';

// if(!$mail->send()) {
//     echo 'Error';
// } else {
    header('location: thank-you.html');

?>