<?php
require('vendor/autoload.php');

$user = 1;
try {
    $obj = new \Eshop\Order($user);
    //$obj->createCart
    $res = $obj->deleteOrder($user);
    echo "<pre>";
    var_dump($res);
    echo "</pre>";
    //$obj->getCartData();
} catch (Exception $e) {
    var_dump($e->getMessage());
}

//$res = $obj->getUserCart();
//echo "<pre>"; print_r($res); echo "</pre>";
