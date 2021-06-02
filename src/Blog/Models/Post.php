<?php

declare(strict_types=1);

namespace App\Blog\Models;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $authorId;

    /**
     * @ORM\Column(type="string")
     */
    private string $slug;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $content;

    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private DateTimeImmutable $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private DateTimeImmutable $updatedAt;

    public function __construct(string $slug, string $title, string $content)
    {
        $this->slug = $slug;
        $this->title = $title;
        $this->content = $content;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function authorId(): int
    {
        return $this->authorId;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
