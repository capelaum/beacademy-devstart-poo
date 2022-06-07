<?php

ini_set('display_errors', 1);

include "Product.php";
include "Category.php";

$c1 = new Category("Categoria 1", "Descrição da categoria 1");
$c2 = new Category("Categoria 2", "Descrição da categoria 2");
$c3 = new Category("Categoria 3", "Descrição da categoria 3");

// var_dump($c1, $c2, $c3);

$p1 = new Product("Notebook", 5000, $c1);
$p2 = new Product("Calça", 300, $c2);
$p3 = new Product("Bola", 80.5, $c3);

$p3->setDescription("Bola de futebol");

// var_dump($p1, $p2, $p3);

echo "<h1>{$p1->getName()} - R$ {$p1->getPrice()} - {$p1->getCategory()->getName()}</h1>";

if (isset($p1->description)) {
  echo "<h2>{$p3->getDescription()}</h2>";
}

echo "<h1>{$p2->getName()} - R$ {$p2->getPrice()} - {$p2->getCategory()->getName()}</h1>";

if ($p2->getDescription()) {
  echo "<h2>{$p3->getDescription()}</h2>";
}

echo "<h1>{$p3->getName()} - R$ {$p3->getPrice()} - {$p3->getCategory()->getName()}</h1>";

if ($p3->getDescription()) {
  echo "<h2>{$p3->getDescription()}</h2>";
}
