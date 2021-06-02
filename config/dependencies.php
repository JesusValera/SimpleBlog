<?php

declare(strict_types=1);

use App\Blog\Repository\PostRepository;
use App\Blog\Repository\PostRepositoryInterface;

return [
    PostRepositoryInterface::class => static fn (): PostRepositoryInterface => new PostRepository(),
    // ...
];
