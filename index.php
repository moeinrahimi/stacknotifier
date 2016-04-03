<?php
 ini_set('display_errors', 'On');
  error_reporting(E_ALL);
require 'vendor/autoload.php';
use GuzzleHttp\Client;

	?>


<a href=
"https://stackexchange.com/oauth/dialog?client_id=6738&scope=read_inbox&redirect_uri=https://stacknotifier.herokuapp.com/"
>sign me in</a>


<?php
$code = $_GET['access_token'];
echo $code;


$client = new GuzzleHttp\Client(['base_uri' => 'https://api.stackexchange.com/']);

$response = $client->post("2.2/me/notifications?site=stackoverflow&access_token=$code&scope=read_inbox")->send();

print_r($response);

?>