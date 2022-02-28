<?php
include_once __DIR__ . '/classes/products.php';
include_once  __DIR__ . '/classes/user.php';

include_once  __DIR__ . '/classes/subclasses/food.php';
include_once  __DIR__ . '/classes/subclasses/kennels.php';
include_once  __DIR__ . '/classes/subclasses/medicines.php';
include_once  __DIR__ . '/classes/subclasses/toys.php';


$user = new Buyer();
var_dump($user);

$product = new Product();
var_dump($product);
