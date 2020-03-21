<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('391895417452-snqeoj9aj01t1ks0fr0s5sd9gga5vpnl.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('dwZVVpkiWfF50AtjkczDJAtJ');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://kyzierexam.herokuapp.com/');

//
$google_client->addScope('email');

$google_client->addScope('profile');


//start session on web page
session_start()

?>
