<?php
include_once 'src/google/Google_Client.php';
include_once 'src/google/contrib/Google_Oauth2Service.php';


$clientId = '351533939784-5j6bqm6br7ro0p6fpsfjjfb820vsufk9.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'T4ILDFLKTGL2ywZxz2rHt6pY'; //Google client secret
$gRedirectURL = 'www.mytest.me/google_login/'; //Callback URL

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