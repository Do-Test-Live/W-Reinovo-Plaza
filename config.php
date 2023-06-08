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
define('STRIPE_API_KEY', 'sk_test_51NG7gKAh5egT2VywXTNJiUS0jkZc8QJHq2q7tG2MLPA0vHiozxU7PlXYe9LYxBfoXQWJq7OqtF5Hxsrz7wRUX27Q00s5gOg47a');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51NG7gKAh5egT2VywIQJ808gbEsBY2SWPAdiGme9zcUq9NGF0HOxW9b9wCMHe2LMaQQAhH1yqkPOo2BgA4yX78PCE00j26HcR6y');
define('STRIPE_SUCCESS_URL', 'http://localhost/W-Reinovo-Plaza/payment-success.php'); //Payment success URL
define('STRIPE_CANCEL_URL', 'http://localhost/W-Reinovo-Plaza/payment-cancel.php'); //Payment cancel URL

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'reinovo');



