<?php

require_once 'vendor/autoload.php';

$product = new \App\Model\Product;

$product->setId(1);
$product->setName("Notebook ASUS");
$product->setDesc("i7, 32gb");

$productDao = new \App\Model\ProductDAO;
$productDao->update($product);

/*
foreach($productDao->read() as $product):
    echo $product['name'].'<br>'.$product['description'].'<hr>';
endforeach;
*/