<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('45197504137-5baq2kb2ns0gfm6fsj83ggfgd7o731ci.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://127.0.0.1:5501/all-in-one/index.html');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 