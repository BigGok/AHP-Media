<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
header('Location: ./');
//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);


$nameKH = $_POST['contname'];


$phone = $_POST['contphone'];


$email = $_POST['contemail'];


$diachi = $_POST['contloc'];


$noidung = $_POST['noidung'];


$body    = 'Thong tin khach hang: <br> Ten: '.$nameKH. '<br> Email: ' . $email .'<br> SDT: '.$phone.'<br> Dia Chi: '.$diachi. '<br> Noi Dung:'.$noidung;


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ahpmedia.sm@gmail.com';                     //SMTP username
    $mail->Password   = 'kvylswdqjjmkszym';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ahpagency@ahpvn.com', 'AHP Agency');
    $mail->addAddress('ahpagency@ahpvn.com');               //Name is optional
    $mail->addReplyTo('ahpagency@ahpvn.com', $nameKH);



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'AHP Agency Thank To You ';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';


    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit;

?>