<?php

declare(strict_types=1);

namespace App\Framework;

use Symfony\Component\HttpFoundation\Request;

final class Kernel
{
    private Request $request;
    private BaseController $controller;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function execute(): void
    {
        $pathInfo = $this->request->getPathInfo();

        $mapping = include dirname(__DIR__) . '/../config/routing.php';
        $controllerClass = $mapping[$pathInfo] ?? NotFoundController::class;

        // Check if the user has access to this $controller here (middleware),
        // if not, return 'OopsController::class'.
        $this->controller = new $controllerClass();
    }

    public function terminate(): string
    {
        $response = $this->controller->invoke($this->request);
        return $response->getContent();
    }
}
