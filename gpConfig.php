<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '703134747238-v3b897spk2acqokn6h12aqb5nb068gl4.apps.googleusercontent.com';
$clientSecret = '1gjnLyYqTStoPX16ZFzsykXn';
$redirectURL = 'http://localhost/hotel_search/login.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CherryTopBlogs.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);


?>