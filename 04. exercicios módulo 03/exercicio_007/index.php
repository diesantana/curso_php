<?php

declare(strict_types=1);
require_once('Product.php');

$product1 = new Product('Notebook', 2500.00);
echo "Produto: {$product1->getName()}" . '<br>'; 
echo "Preço: {$product1->getPrice()}" . '<br>'; 

$product1->setPrice(-100);
echo "Preço após validação: {$product1->getPrice()}" . '<br>'; 