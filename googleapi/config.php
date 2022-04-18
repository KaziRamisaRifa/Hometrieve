<?php

require_once 'vendor/autoload.php';

// $clientID = '168779229390-bsoh4676p19tge2ak7oqls0c3tb5ro3u.apps.googleusercontent.com';
// $client_secret = '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';
// $reddirectUrl = 'http://localhost/CSE299_Project/CSE299_Project/googleapi/glogin.php';

$clientID = '277855931498-n3psefvostr2e4ekjpda7676sinn0hfu.apps.googleusercontent.com';
$client_secret = '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';
$reddirectUrl = 'http://localhost/CSE299_Project/googleapi/glogin.php';



$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($client_secret);
$client->setRedirectUri($reddirectUrl);
$client->addScope('email');
$client->addScope('profile');

$loginUrl = $client->createAuthUrl();

?>