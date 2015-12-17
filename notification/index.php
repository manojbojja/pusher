<?php

require(dirname(__FILE__).'/../vendor/autoload.php');

// $app_id = getenv('PUSHER_APP_ID');
// $app_key = getenv('PUSHER_APP_KEY');
// $app_secret = getenv('PUSHER_APP_SECRET');

$app_id = '161368';
$app_key = 'a50e1a063f0b0bfa839a';
$app_secret = '8eb3cf4f7ece10e0424e';

$pusher = new Pusher($app_key, $app_secret, $app_id);

$text = htmlspecialchars($_POST['message']);

$data['message'] = $text;
$result = $pusher->trigger('my_channel', 'new_message', $data);
var_dump($result);