<?php

ini_set('display_errors', 1);

include __DIR__  . "/../vendor/autoload.php";

use App\Controller\CategoryController;
use App\Controller\ProductController;
use App\Controller\IndexController;

$controller = new IndexController();
$controller->indexAction();
$controller->loginAction();

$product = new ProductController();
$product->listAction();
$product->addAction();
$product->editAction();

$category = new CategoryController();
$category->listAction();
$category->addAction();
$category->editAction();
