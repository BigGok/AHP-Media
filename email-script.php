
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
header("Location: ./");

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
//Create an instance; passing `true` enables exceptions
$nameKH = $_POST['contname'];
if (isset($_POST['email1'])) {
    $email = $_POST['contemail'];
} else {
    echo "Vui lòng nhập email";
}

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
    $mail->addAddress($email);               //Name is optional
    $mail->addReplyTo($email, $nameKH);



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'AHP Agency Thank To You ';
    $mail->Body    = 'Công ty Truyền Thông AHP Agency đã được thành lập với mục đích mang đến những giải pháp truyền thông tiên tiến và chất lượng cao cho các doanh nghiệp và tổ chức. Với đội ngũ nhân viên giàu kinh nghiệm và sáng tạo, chúng tôi tin tưởng rằng có thể cung cấp cho khách hàng những dịch vụ truyền thông chất lượng tốt nhất. Chúng tôi tập trung vào việc sử dụng công nghệ mới nhất và tiên tiến nhất để giúp khách hàng của chúng tôi tiếp cận với đối tượng tiềm năng và gia tăng sức mạnh kinh doanh của họ. Với mục tiêu luôn hướng đến sự hài lòng của khách hàng, chúng tôi cam kết cung cấp dịch vụ chất lượng và giá cả cạnh tranh.

    Từ việc quảng bá sản phẩm đến việc xây dựng thương hiệu, chúng tôi cung cấp mọi dịch vụ truyền thông mà khách hàng cần. Hãy liên hệ với chúng tôi để biết thêm chi tiết về các giải pháp truyền thông của chúng tôi. Chúng tôi sẵn sàng giúp đỡ và hỗ trợ bạn ấu một cách tốt nhất. Chúng tôi tin rằng, qua sự hợp tác của chúng tôi, chúng ta có thể giúp cho doanh nghiệp và tổ chức của bạn phát triển và tăng trưởng một cách tốt nhất.';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit;
?>