<?php

use App\Controller\IndexController;
use App\Controller\NotFoundController;
use App\Controller\TestController;
use Symfony\Component\HttpFoundation\Request;

require_once "./../vendor/autoload.php";

$mapping = [
    '/' => IndexController::class,
    '/test' => TestController::class,
];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';

$controllerClass = $mapping[$pathInfo] ?? NotFoundController::class;
$controller = new $controllerClass();

$request = Request::createFromGlobals();
echo $controller->invoke($request);
