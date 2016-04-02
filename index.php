<?php
 ini_set('display_errors', 'On');
  error_reporting(E_ALL);
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(
'https://stackexchange.com/');
 

$res = $client->request('POST', 'oauth', [
    'query' => ['client_id' => '6738']
]);




print_r($res);