<?php

declare(strict_types=1);

namespace App\Repository;

interface PostRepositoryInterface
{
    public function getPosts(): array;

    public function getPostById(string $id): array;
}
