<?php

ini_set('display_errors', 1);

include "Product.php";

$p1 = new Product();
$p1->setName("Notebook");
$p1->setPrice(5000);

$p2 = new Product();
$p2->setName("Calça");
$p2->setPrice(-300);

var_dump($p1);
var_dump($p2);

echo "<hr>";

echo "<h1>{$p1->getName()} - R$ {$p1->getPrice()}</h1>";
echo "<h1>{$p2->getName()} - R$ {$p2->getPrice()}</h1>";
