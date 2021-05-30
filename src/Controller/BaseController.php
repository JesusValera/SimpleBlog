<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseController
{
    public function __construct()
    {
    }

    abstract public function invoke(Request $request): Response;
}
