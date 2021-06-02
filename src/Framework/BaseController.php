<?php

declare(strict_types=1);

namespace App\Framework;

use App\Blog\Repository\PostRepository;
use App\Blog\Repository\PostRepositoryInterface;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class BaseController
{
    private Environment $twig;
    private array $handleDependencies;

    public function __construct()
    {
        $this->handleDependencies = $this->setupDependencies();
        $this->twig = $this->setupTwig();
    }

    private function setupDependencies(): array
    {
        return [
            PostRepositoryInterface::class => static fn (): PostRepositoryInterface => new PostRepository(),
            // ...
        ];
    }

    private function setupTwig(): Environment
    {
        return new Environment(
            new FilesystemLoader(__DIR__ . '/../../views/')
        );
    }

    abstract public function invoke(Request $request): Response;

    /**
     * @return mixed
     *
     * @throws Exception
     */
    protected function resolveDependencies(string $dependency)
    {
        if (isset($this->handleDependencies[$dependency])) {
            return $this->handleDependencies[$dependency]();
        }

        throw new Exception('Unknown provided dependency: ' . $dependency);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    protected function renderTemplate(string $name, array $context = []): Response
    {
        return new Response($this->twig->render($name, $context));
    }
}
