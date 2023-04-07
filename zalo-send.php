<?php
require_once __DIR__ . '/vendor/autoload.php';

use Zalo\Zalo;
use Zalo\Zalo\ZaloMessageApi;

$oaId = '1758951227414538507';


// Tạo đối tượng ZaloOA

$config = array(
    'app_id' => '3185469854796871624',
    'app_secret' => 'CkMIPEY4YZQ3P2824BJ5'
);
$zalo = new Zalo($config);


// Lấy access token từ OAuth 2.0
$accessToken = 'q5PyUD6R7nZHMtrwtveS5D5JVN3SXLCUj3P58zINI4EL5dajvxXSAEaCNHddc7e8WJXoDF-NLoUC0qiRyw5b0VrqI3kbssmxv5a3Bgx4C4oXKZvlxTaJJurlVLtXmqvaZbn-L_J6Hsc8R5bLuELgKh5hIrA_mtPIwbT9Ge7WQ7F0R4zwbkqrQEPz10VjiYatcYyC2UQqCm2U6GyKm8mwExC15HNYWJesj382DUAGEJpgBYeDYPmh3CSh7IsRe0CosXLWKjg8RqcWCW1UrlzlGzq_TdUddKju-5HUORl-H0JsC5aUdvvHETyAG2k7WbaGzIraAVssR0g1EmziEVXNLjs061y';

// Tạo đối tượng Zalo Message API
$zaloMessageApi = new ZaloMessageApi($accessToken);

// Lấy thông tin người dùng từ số điện thoại
$phoneNumber = '0392737834';
$userProfile = $zaloMessageApi->getUserProfile($phoneNumber);

// Gửi tin nhắn đến người dùng
$fromId = $oaId;
$toId = $userProfile['data']['user_id'];
$message = 'Xin chào, đây là tin nhắn test từ Zalo Message API!';
$attachment = null;
$result = $zaloMessageApi->sendTextMessage($fromId, $toId, $message, $attachment);

// Kiểm tra kết quả
if ($result['error_code'] == 0) {
    echo 'Đã gửi tin nhắn thành công!';
} else {
    echo 'Gửi tin nhắn thất bại: ' . $result['error_message'];
}


?>
