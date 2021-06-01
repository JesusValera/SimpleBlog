<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\PostRepository;
use App\Repository\PostRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class AdminController extends BaseController
{
    public function invoke(Request $request): Response
    {
        /** @var PostRepository $postRepository */
        $postRepository = $this->resolveDependencies(PostRepositoryInterface::class);

        return $this->renderTemplate(
            'admin.html.twig',
            ['posts' => $postRepository->getPosts()]
        );
    }
}
