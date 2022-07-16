<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once '/vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACf3ff8f9f8d9f41ebe70c9a0a37c30dc0"; 
$token  = "[AuthToken]"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+918894002117", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "maderchod" 
                           ) 
                  ); 
 
print($message->sid);
