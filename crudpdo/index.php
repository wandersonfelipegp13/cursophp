<?php

require_once 'vendor/autoload.php';

$product = new \App\Model\Product;
$product->setName("Notebook DELL");
$product->setDesc("i5, 4bg");

$productDao = new \App\Model\ProductDAO;
$productDao->read();
foreach($productDao->read() as $product):
    echo $product['name'].'<br>'.$product['description'].'<hr>';
endforeach;