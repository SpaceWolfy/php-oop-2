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

$food = new Food('1kg', 'Adatto per cani di piccola taglia', 'Bastoncino Ossetto', 'Il miglior amico del tuo animale, per denti splendidi', 15, 'cane');
var_dump($food);

$kennel = new Kennels(1, 'Adatta per cani di piccola taglia', 'Cuccia Eminflex', 'Una splendida cuccia!', 89, 'gatto');
var_dump($kennel);

$medicine = new Medicines(2, 'Da usare su animali vivi', 'Cremina idratante', 'Una splendida cremina per pelo lucido e zero pulci!', 24, 'cane');
var_dump($medicine);


$toys = new Toys('Grosso', false, 'Maialino Rampante', 'Il giocattolo perfetto per tutti gli animali', 18.50, 'serpente');
var_dump($toys);
