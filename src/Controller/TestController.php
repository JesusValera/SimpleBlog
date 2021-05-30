<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class TestController extends BaseController
{
    public function invoke(Request $request): Response
    {
        return new Response('test');
    }
}
