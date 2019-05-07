<?php

require __DIR__.'/IConn.php';
require __DIR__.'/Conn.php';
require __DIR__.'/IProduct.php';
require __DIR__.'/Product.php';
require __DIR__.'/service/ServiceProduct.php';

$db = new Conn("localhost", "pdo-son", "root", "");
$product = new Product;
//$product->setId(3)
//    ->setName("T Shirt")
//    ->setDesc("MCD");

//$product->setId(2);

$serviceProduct = new ServiceProduct($db, $product);
//$saveProduct = $serviceProduct->save();
//$list = $serviceProduct->listAll();
//$updateProduct = $serviceProduct->update();

$deleteProduct = $serviceProduct->delete(1);
print_r($deleteProduct);
