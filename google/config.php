<?php
require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId('391895417452-snqeoj9aj01t1ks0fr0s5sd9gga5vpnl.apps.googleusercontent.com');
$google_client->setClientSecret('dwZVVpkiWfF50AtjkczDJAtJ');
$google_client->setRedirectUri('https://kyzierexam.herokuapp.com/');
$google_client->addScope('email');
$google_client->addScope('profile');


session_start();
// credits: john paul majaaaaaa
?>
