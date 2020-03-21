<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '785266398672440',
  'app_secret'     => 'd755827b4831a2f48db4013d83d52d4d',
  'default_graph_version'  => 'v2.10'
]);

?>
