<?php

use App\Controller\AdminController;
use App\Controller\CreatePostController;
use App\Controller\IndexController;
use App\Controller\LoginController;
use App\Controller\NotFoundController;
use App\Controller\ShowPostController;
use App\Controller\UpdatePostController;
use Symfony\Component\HttpFoundation\Request;

require_once "./../vendor/autoload.php";

include dirname(__DIR__) . '/config/bootstrap.php';

$mapping = [
    '/'             => IndexController::class,
    '/post'         => ShowPostController::class,
    '/login'        => LoginController::class,
    '/admin'        => AdminController::class,
    '/admin/create' => CreatePostController::class,
    '/admin/update' => UpdatePostController::class,
];

$request = Request::createFromGlobals();
$controllerClass = $mapping[$request->getPathInfo()] ?? NotFoundController::class;

// Check if the user has access to this $controller here (middleware),
// if not, return 'OopsController::class'.
$controller = new $controllerClass();

$response = $controller->invoke($request);
echo $response->getContent();
