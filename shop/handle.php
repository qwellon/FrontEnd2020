<?php
require ('vendor/autoload.php');
$request = json_decode(file_get_contents('php://input'),1);
<<<<<<< HEAD

$obj = new \Eshop\Product();

if ($request['method'] == 'update')
{
    try {
        $obj->updateProduct($request['id'], $request);

    }
    catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
elseif ($request['method'] == 'delete')
{
    $obj->deleteProduct($request['id']);
}
elseif ($request['method'] == 'getProduct')
{

    $objData = $obj->getProducts(["*"],['id'=>$request['id']]);
    echo json_encode($objData);
}
=======
var_dump($request);
$obj = new \Eshop\Product();
$obj->deleteProduct($request['id']);
>>>>>>> cf6042e63ace6be6595c601ec1192750aeef9dd5
