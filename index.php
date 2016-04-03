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
$code = $_GET['code'];
$client = new GuzzleHttp\Client(['base_uri' => 'https://stackexchange.com/oauth/access_token']);

$response = $client->post("?client_id=6738&client_secret=hLhSGXL0yWCCtuAc7FORbQ&code=$code&redirect_uri= https://stacknotifier.herokuapp.com/")->send();

print_r($response);

?>