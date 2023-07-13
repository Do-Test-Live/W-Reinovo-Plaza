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
define('STRIPE_API_KEY', '');
define('STRIPE_PUBLISHABLE_KEY', '');
define('STRIPE_SUCCESS_URL', 'https://reinevoplaza.com/payment-success.php'); //Payment success URL
define('STRIPE_CANCEL_URL', 'https://reinevoplaza.com/payment-cancel.php'); //Payment cancel URL

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'u6daj3gm8rxlp');
define('DB_PASSWORD', 'u3!GIE1=]#qm');
define('DB_NAME', 'dbfpdgxqb2hg0a');



