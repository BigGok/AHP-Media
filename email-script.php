<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
mb_internal_encoding('UTF-8');
header('location: ./');
//Load Composer's autoloader
require 'vendor/autoload.php';
$mail->CharSet = "UTF-8";
$mail = new PHPMailer(true);
$mail->Encoding = 'base64';
//Create an instance; passing `true` enables exceptions
$nameKH = $_POST['contname'];
$nameKH = mb_convert_encoding($nameKH, "UTF-8");

$phone = $_POST['contphone'];
$phone = mb_convert_encoding($phone, "UTF-8");

$email = $_POST['contemail'];
$email = mb_convert_encoding($email, "UTF-8");

$diachi = $_POST['contloc'];
$diachi = mb_convert_encoding($diachi, "UTF-8");

$noidung = $_POST['noidung'];
$noidung = mb_convert_encoding($noidung, "UTF-8");

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
    $mail->setFrom('ahpmedia@ahpvn.com', 'AHP Agency');
    $mail->addAddress('ahpmedia@ahpvn.com');               //Name is optional
    $mail->addReplyTo('ahpmedia@ahpvn.com', $nameKH);



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'AHP Agency Thank To You ';
    $mail->Body    = 'Thong tin khach hang: <br> Ten: '.$nameKH. '<br> Email: ' . $email .'<br> SDT: '.$phone.'<br> Dia Chi: '.$diachi. '<br> Noi Dung:'.$noidung;


    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit;
?>