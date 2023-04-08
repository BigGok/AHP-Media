<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
header('Location: ./');
include 'includes/config.php';
//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$nameKH = "";
$phone ="";
$email ="";
$noidung ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST["contname"])) {
    $nameKH = $_POST['contname'];
}

if(isset($_POST["contphone"])) {
    $phone = $_POST['contphone'];
}

if(isset($_POST["contemail"])) {
    $email = $_POST['contemail'];
}

if(isset($_POST["noidung"])) {
    $noidung = $_POST['noidung'];
}
}
    $sql = "INSERT INTO thongtinKH (HoTen, SDT, Email, noidung)
    VALUES ('$nameKH', '$phone', '$email', '$noidung')";

    if ($con->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }



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