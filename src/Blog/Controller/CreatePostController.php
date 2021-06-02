<?php

declare(strict_types=1);

namespace App\Blog\Controller;

use App\Framework\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CreatePostController extends BaseController
{
    public function invoke(Request $request): Response
    {
        return $this->renderTemplate('create-post.html.twig');
    }
}
