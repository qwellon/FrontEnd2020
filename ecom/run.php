<?php
require('vendor/autoload.php');

$user = 1;
try {
    $obj = new \Eshop\Order($user);
    //$obj->createCart
    $obj->createOrder($user, 2, 'Kurkovaya 11');
    //$obj->getCartData();
} catch (Exception $e) {
    var_dump($e->getMessage());
}

//$res = $obj->getUserCart();
//echo "<pre>"; print_r($res); echo "</pre>";
