<?php

require_once 'vendor/autoload.php';

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