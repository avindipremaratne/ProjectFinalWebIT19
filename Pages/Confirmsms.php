<?php
 
require "vendor/autoload.php"; 
include 'Settings.php';
 
$client = new Services_Twilio($account_sid , $auth_token);
$client->account->messages->create(array(
"From" => $twilio_phone_number,
"To" => "+94768532085",
"Body" => "Hello Sachin!"));
?>