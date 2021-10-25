<?php

require 'classes/product.php';
require 'models/product.php';

// use classes\Product;
use models\Product as productModel;

// $product = new Product();
$product = new productModel();
// $product = new \models\Product();
$product->showDetails();
