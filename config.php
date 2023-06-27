<?php

// Product Details
// Minimum amount is $0.50 US
$productName = "Magnet Power 產地日本";
$productID = "RP-1";
$productPrice = 120;
$currency = "hkd";

/*
 * Stripe API configuration
 * Remember to switch to your live publishable and secret key in production!
 * See your keys here: https://dashboard.stripe.com/account/apikeys
 */
define('STRIPE_API_KEY', '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');
define('STRIPE_PUBLISHABLE_KEY', 'pk_live_51NG7gKAh5egT2VywqjuEP2xffULENLzolMTNU2kC9M7Ox0o4G1HZLXVO9K88PEvtPjFckW1iHvISKgBntH9MAaXn00P9pQXlgv');
define('STRIPE_SUCCESS_URL', 'https://reinevoplaza.com/payment-success.php'); //Payment success URL
define('STRIPE_CANCEL_URL', 'https://reinevoplaza.com/payment-cancel.php'); //Payment cancel URL

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'u6daj3gm8rxlp');
define('DB_PASSWORD', 'u3!GIE1=]#qm');
define('DB_NAME', 'dbfpdgxqb2hg0a');



