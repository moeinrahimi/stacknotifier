<?php
 ini_set('display_errors', 'On');
  error_reporting(E_ALL);
require 'vendor/autoload.php';
use GuzzleHttp\Client;

	?>


<a href=
"https://stackexchange.com/oauth?client_id=6738&scope=read_inbox&redirect_uri=https://stacknotifier.herokuapp.com/"
>sign me in</a>

<?php

if (isset($_GET['code'])) {
$client = new GuzzleHttp\Client();
$code =$_GET['code'];
$response = $client->post("https://stackexchange.com/oauth/access_token?client_id=6738&client_secret=hLhSGXL0yWCCtuAc7FORbQ((&code=$code&redirect_uri=https://stacknotifier.herokuapp.com/");

print_r($response->send($response));
}

?>