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
$client = new GuzzleHttp\Client ([
    // Base URI is used with relative requests
    'base_uri' => 'https://stackexchange.com/oauth/',
    // You can set any number of default request options.
    'timeout'  => 8.0,
]);
$code =$_GET['code'];
// $response = $client->request('POST',"access_token?
// 	client_id=6738&client_secret=hLhSGXL0yWCCtuAc7FORbQ((
// 		&code=$code&redirect_uri=https://stacknotifier.herokuapp.com/");
$response = $client->request('POST', 'access_token', [
    'form_params' => [
        'client_id' => '6738',
        'client_secret' => 'hLhSGXL0yWCCtuAc7FORbQ((',
        'code' =>$code,
            'redirect_uri' => 'https://stacknotifier.herokuapp.com/'
        
    ]
]);

$auth =$response->getBody()->getContents();

$auth = parse_str($auth);

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://api.stackexchange.com/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
echo $access_token;
$response = $client->request('GET',"2.2/me/notifications?site=stackoverflow&access_token=$access_token&key=TxfA4E5YFX*jZ5wHEd2iKg((");
print_r($response->getBody->getContents());

}

?>