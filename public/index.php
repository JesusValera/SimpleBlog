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

$request = Request::createFromGlobals();
$controllerClass = $mapping[$request->getPathInfo()] ?? NotFoundController::class;
$controller = new $controllerClass();

$response = $controller->invoke($request);
echo $response->getContent();
