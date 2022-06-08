<?php

ini_set('display_errors', 1);

include __DIR__  . "/../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$baseUrl = "/DevStart/Sprints/Sprint_6_PHPOO/projeto_final/public";

function createRoute(string $controllerName, string $actionName)
{
  return [
    'controller' => $controllerName,
    'action' => $actionName
  ];
}

$routes = [
  $baseUrl . "/" => createRoute(IndexController::class, 'indexAction'),
  $baseUrl . "/login" => createRoute(IndexController::class, 'loginAction'),
  $baseUrl . "/products" => createRoute(ProductController::class, 'listAction'),
  $baseUrl . "/products/add" => createRoute(ProductController::class, 'addAction'),
  $baseUrl . "/products/edit" => createRoute(ProductController::class, 'editAction'),
  $baseUrl . "/categories" => createRoute(CategoryController::class, 'listAction'),
  $baseUrl . "/categories/add" => createRoute(CategoryController::class, 'addAction'),
  $baseUrl . "/categories/edit" => createRoute(CategoryController::class, 'editAction'),
];

if (!isset($routes[$url])) {
  (new ErrorController())->notFoundAction();
  exit;
}

$controllerName = $routes[$url]['controller'];
$actionName = $routes[$url]['action'];

(new $controllerName())->$actionName();
