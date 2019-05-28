<?php
    require_once('vendor/autoload.php');

    $stripe = [
    "secret_key"      => "sk_test_Rm7NYoviCIDgwFuG7R6XiB6s",
    "publishable_key" => "pk_test_UZFuFHB9NrhAS0Zs2bmaeDWb",
    ];

    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>