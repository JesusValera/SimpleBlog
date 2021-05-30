<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class PostController extends BaseController
{
    public function invoke(Request $request): Response
    {
        return new Response($this->twig->render('post.html.twig', ['post' => $this->getPost()]));
    }

    private function getPost(): array
    {
        return [
            'id'         => '1',
            'title'      => 'Lorem Ipsum 1',
            'slug'       => 'lorem-ipsum-1',
            'updated_at' => new \DateTimeImmutable(),
            'created_at' => new \DateTimeImmutable(),
            'content'    => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'author_id'  => 1,
            'author_name'  => 'Jesus Valera',
        ];
    }
}
