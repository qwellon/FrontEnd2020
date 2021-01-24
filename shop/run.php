<?php
require('vendor/autoload.php');
$fields = [
<<<<<<< HEAD
    'name' => 'Skoda',
    'description' => 'Green',
    'price' => 9000,
    'active' => '1',
    'img_path' => '/img'
];

try {
    $obj = new \Eshop\Product();
    $obj->addProduct(false);
    // } catch (PipedriveApiException $e) {
} catch (Exception $e) {
    mail('admin@admin.ri', 'Ошибка на сайте', $e->getMessage());
    var_dump($e->getMessage());
    var_dump($e->getTrace());
}


var_dump(1);

=======
    'name' => 'Opel',
    'description' => 'black',
    'price' => 4000,
    'active' => '0',
    'img_path' => '/img'
];
$obj = new \Eshop\Product();
>>>>>>> cf6042e63ace6be6595c601ec1192750aeef9dd5
//$obj->updateProduct(4,$fields);
//$obj->addProduct($fields);
//$obj->deleteProduct(3);
//$test = [1,2,4];
//$obj->deleteProducts($test);
<<<<<<< HEAD
// $obj->addProduct($fields);
/*$products = $obj->getProducts(['id', 'name'], ["active" => 0, "price" => 2000]);
echo "<pre>";
print_r($products);
echo "</pre>";*/
=======
//$obj->addProduct($fields);
$products = $obj->getProducts(['id', 'name'], ["price" => 2000]);
echo "<pre>";
print_r($products);
echo "</pre>";
>>>>>>> cf6042e63ace6be6595c601ec1192750aeef9dd5
