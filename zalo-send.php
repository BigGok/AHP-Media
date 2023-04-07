<?php
require_once __DIR__ . '/vendor/autoload.php';

use Zalo\Zalo;
use Zalo\OA\ZaloOA;

$appId = '3185469854796871624';
$appSecret = 'CkMIPEY4YZQ3P2824BJ5';
$oaId = '1758951227414538507';
$accessToken = 'q5PyUD6R7nZHMtrwtveS5D5JVN3SXLCUj3P58zINI4EL5dajvxXSAEaCNHddc7e8WJXoDF-NLoUC0qiRyw5b0VrqI3kbssmxv5a3Bgx4C4oXKZvlxTaJJurlVLtXmqvaZbn-L_J6Hsc8R5bLuELgKh5hIrA_mtPIwbT9Ge7WQ7F0R4zwbkqrQEPz10VjiYatcYyC2UQqCm2U6GyKm8mwExC15HNYWJesj382DUAGEJpgBYeDYPmh3CSh7IsRe0CosXLWKjg8RqcWCW1UrlzlGzq_TdUddKju-5HUORl-H0JsC5aUdvvHETyAG2k7WbaGzIraAVssR0g1EmziEVXNLjs061y';
$refreshToken = 'UrJGiYNbEKntTi6768PWN2eyYPSiksSMHpcHeaglIX8XAhlOJxOwEXX0e_CGoamw5acVgr3qRI4bNeYLGyfcQYrMbz1kd0mSOHtcs62Q2MWUFClaHuOITs8Gg_XGpGDjUttqv3MHHtmZ7wcmFOrAI7OZf_uUeLe7QIxRq7U5S93v6SvCmwqGGspEG_yXL9vUBg00W3mlarysicA2MIlnLYAsVxOyMfzFLP9dcrvP9ZyDs1OonGqo';

// Tạo đối tượng ZaloOA
$zaloOA = new ZaloOA($appId, $appSecret);

// Cập nhật access token và refresh token
$zaloOA->setAccessToken($accessToken);
$zaloOA->setRefreshToken($refreshToken);

// Số điện thoại của khách hàng cần lấy User ID
$phone = "0392737834";

// Tạo một đối tượng curl để gửi yêu cầu lấy thông tin User ID
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://openapi.zalo.me/v2.0/oa/getprofile");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "access_token" => $access_token,
    "data" => json_encode(array(
        "phone" => $phone
    ))
)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Gửi yêu cầu và nhận kết quả trả về
$result = curl_exec($ch);
curl_close($ch);

// Xử lý kết quả trả về từ Zalo OpenAPI
$response = json_decode($result, true);
if ($response['error'] == 0) {
    $user_id = $response['data']['user_id'];
    echo "UserID của khách hàng có số điện thoại $phone là $user_id";
} else {
    echo "Lỗi khi lấy thông tin User ID: " . $response['message'];
}

$me = $user_id;

// ------------------------------------------Gửi tin nhắnn---------------------------------------------------
// ----------------------------------------------------------------------------------------------------------
// Gửi tin nhắn
$recipientId = 'USER_OR_PAGE_ID';
$message = 'Nội dung tin nhắn';
$response = $zaloOA->sendMessage($recipientId, $message);

// Xử lý kết quả trả về
if ($response->getErrorMsg()) {
    echo 'Gửi tin nhắn thất bại: ' . $response->getErrorMsg();
} else {
    echo 'Gửi tin nhắn thành công';
}
//------------------------------------------------------------------------------------------------------------

?>
