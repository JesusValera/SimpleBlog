<?php

declare(strict_types=1);

use App\Blog\Controller\AdminController;
use App\Blog\Controller\CreatePostController;
use App\Blog\Controller\IndexController;
use App\Blog\Controller\LoginController;
use App\Blog\Controller\ShowPostController;
use App\Blog\Controller\UpdatePostController;

return [
    '/'             => IndexController::class,
    '/post'         => ShowPostController::class,
    '/login'        => LoginController::class,
    '/admin'        => AdminController::class,
    '/admin/create' => CreatePostController::class,
    '/admin/update' => UpdatePostController::class,
];
