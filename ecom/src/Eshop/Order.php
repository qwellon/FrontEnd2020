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
        //$objCart = new Cart($userId);

        $deliveryPrice = 0;
        $cartData = $objCart->getCartData();
        $totalPrice = $cartData['total_price'];
        if ($totalPrice < 9999) {
            $deliveryPrice = 999;
        }
        $query = "INSERT INTO `{$this->orderTable}` (`id`, `user_id`, `cart_id`, `address`, `delivery`, `status`) VALUES (NULL, '{$userId}', '{$cartID}', '{$address}', '{$deliveryPrice}', '0')";
        var_dump($query);
        return $this->db->query($query);
    }
    public function makeOrder($userId)
    {
        $query = "UPDATE `orders` SET `status` = 1 WHERE `orders`.`id` = {$userId}";
        return $this->db->query($query);
    }
    public function getOrderId($userId)
    {
        $query = "SELECT {$this->orderTable}.id FROM orders
        WHERE {$this->orderTable}.user_id = {$userId} 
        GROUP BY id DESC
        LIMIT 1";
        var_dump($query);
        $exec = $this->db->query($query);
        $fetch = $exec->fetch_all(MYSQLI_ASSOC);
        echo "<pre>";
        var_dump($fetch);
        echo "</pre>";
        return $fetch[0]['id'];
    }
    public function deleteOrder($userId)
    {
        $orderId = $this->getOrderId($userId);
        $query = "DELETE FROM `{$this->orderTable}` WHERE `orders`.`id` = {$orderId}";
        var_dump($query);
        return $this->db->query($query);
    }
}
