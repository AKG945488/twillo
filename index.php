<?php 
require_once('vendor/autoload.php');
$stripe = new \Stripe\StripeClient('sk_test_nR7fNrOKz8OAVLg8nIlLNEeu00CxbYwI5v');

$refunded = $stripe->refunds->create([
    'charge' => 'ch_1Hedw2EecuKiqt1LZc2qCra7',
    'amount' => 3000
  ]);

echo '<pre>';
  print_r($refunded);
echo '</pre>';







?>