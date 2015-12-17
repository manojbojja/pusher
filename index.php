<?php
require('Pusher.php');

$app_id = '161538';
$app_key = '4cf9245b770c2e582197';
$app_secret = 'f130afa50aa59f1148d8';

$pusher = new Pusher(
  $app_key,
  $app_secret,
  $app_id,
  array('encrypted' => true)
);

$data['message'] = 'hello world';
$result = $pusher->trigger('my_channel', 'new_message', $data);
var_dump($result);

?>