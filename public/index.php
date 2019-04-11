<?php

require '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/Views');
$twig = new \Twig\Environment($loader);


$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('index.html.twig', [
    'produits'=>['product1', 'product2', 'product3', 'product4', 'product5'],
]);
