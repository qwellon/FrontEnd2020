<?php

namespace Eshop;

class Order
{
    protected $orderTable = 'orders';
    protected $orderCartTable = 'in_cart';
    protected $cartTable = 'cart';
    protected $db = null;
    protected $userId = false;
    protected $cartId = false;

    public function __construct($userId)
    {
        $this->userId = $userId;
        $this->db = new Db();
    }

    public function createOrder($userId, $cartID, $address)
    {
        $objCart = new Cart($userId);

        $deliveryPrice = 0;
        $cartData = $objCart->getCartData();
        $totalPrice = $cartData['total_price'];
        if ($totalPrice < 9999) {
            $deliveryPrice = 999;
        }
        $query = "INSERT INTO '{$this->orderTable}' (`id`, `user_id`, `cart_id`, `address`, `delivery`, `status`) VALUES (NULL, '{$userId}', '{$cartID}', '{$address}', '{$deliveryPrice}', '0')";
        return $this->db->query($query);
    }
    public function makeOrder($userId)
    {
        $query = "UPDATE `orders` SET `status` = 1 WHERE `orders`.`id` = {$userId}";
        return $this->db->query($query);
    }
}
