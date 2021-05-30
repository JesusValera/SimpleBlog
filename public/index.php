<?php

use App\Controller\AdminController;
use App\Controller\IndexController;
use App\Controller\LoginController;
use App\Controller\NotFoundController;
use App\Controller\PostController;
use Symfony\Component\HttpFoundation\Request;

require_once "./../vendor/autoload.php";

$mapping = [
    '/' => IndexController::class,
    '/post' => PostController::class,
    '/login' => LoginController::class,
    '/admin' => AdminController::class,
];

$request = Request::createFromGlobals();
$controllerClass = $mapping[$request->getPathInfo()] ?? NotFoundController::class;
$controller = new $controllerClass();

$response = $controller->invoke($request);
echo $response->getContent();
