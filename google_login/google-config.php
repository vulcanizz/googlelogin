<?php
include_once 'src/google/Google_Client.php';
include_once 'src/google/contrib/Google_Oauth2Service.php';


$clientId = '321788750722-so20900fc4bj9vr9m37fru8lu30di198.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'LCr4VazGs-B5116B6GzYYumt'; //Google client secret
$gRedirectURL = 'http://www.mytest.me/google_login'; //Callback URL

$gClient = new Google_Client();
$gClient->setApplicationName('xxxx');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($gRedirectURL);
$gClient->setAccessType('online');
$gClient->setApprovalPrompt('auto') ;
$google_oauthV2 = new Google_Oauth2Service($gClient);
$gloginUrl = $gClient->createAuthUrl();
?>