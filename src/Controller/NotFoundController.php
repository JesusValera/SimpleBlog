<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class NotFoundController extends BaseController
{
    public function invoke(Request $request): Response
    {
        return $this->renderTemplate('not-found.html.twig');
    }
}
