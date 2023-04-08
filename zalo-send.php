<?php
require_once __DIR__ . '/vendor/autoload.php';

use Zalo\Zalo;
use Zalo\Zalo\ZaloMessageApi;
use Zalo\Builder\MessageBuilder;
use Zalo\ZaloEndpoint;  

$oaId = '1758951227414538507';


// Tạo đối tượng ZaloOA

$config = array(
    'app_id' => '3185469854796871624',
    'app_secret' => 'CkMIPEY4YZQ3P2824BJ5'
);
$zalo = new Zalo($config);


// Lấy access token từ OAuth 2.0
$accessToken = 'PNL11GRhEc5aU4072EevRMHmG0qBzKToPXn04bE6Eo8vRna61AfY7MP3Qdviq5HF0naiLZtdB74W8IKIABeuCmae5ZHhkczNNaiMIrhN0sbxIW0A4AaPCGP37Gmlt60PHIrLFLRFN0mrDqSj8CjiIWqbOMaaztfJ9H1uO0VJVMiR0bfzBfv6PJ5zI70Il6X3F49aHXQT7N80LGTj3yq3KXjK8dbrYLuTPaaYV7Ua05rQK1r1OhGDVs1s9HHukZvrQoCm7bNHE3bx5JrT5TW5M3mW958hkIHm160uK1QXH4adPqT-DuvEMozcJ3WIWrGX3NrMEWQSMXzfH50-0enTErkhJr8Ay3rc';

// build data
$msgBuilder = new MessageBuilder('text');
$msgBuilder->withUserId('494021888309207992');
$msgBuilder->withText('Message Text');
 
// add buttons (only support 5 buttons - optional)
$actionOpenUrl = $msgBuilder->buildActionOpenURL('https://wwww.google.com'); // build action open link
$msgBuilder->withButton('Open Link', $actionOpenUrl);
 
$actionQueryShow = $msgBuilder->buildActionQueryShow('query_show'); // build action query show
$msgBuilder->withButton('Query Show', $actionQueryShow);
 
$actionQueryHide = $msgBuilder->buildActionQueryHide('query_hide'); // build action query hide
$msgBuilder->withButton('Query Hide', $actionQueryHide);
 
$actionOpenPhone = $msgBuilder->buildActionOpenPhone('0376614498'); // build action open phone
$msgBuilder->withButton('Open Phone', $actionOpenPhone);
 
$actionOpenSMS = $msgBuilder->buildActionOpenSMS('0376614498', 'sms text'); // build action open sms
$msgBuilder->withButton('Open SMS', $actionOpenSMS);
 
$msgText = $msgBuilder->build();
// send request
$response = $zalo->post(ZaloEndpoint::API_OA_SEND_MESSAGE, $accessToken, $msgText);
$result = $response->getDecodedBody(); // result


?>
