<?php

declare(strict_types=1);

namespace Tests\Integration;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Panther\PantherTestCaseTrait;

final class RoutingTest extends TestCase
{
    use PantherTestCaseTrait;

    /** @test */
    public function display_index(): void
    {
        $client = self::createHttpBrowserClient();
        $response = $client->request('GET', self::$baseUri . '/');

        self::assertStringContainsString(
            'index',
            $response->html()
        );
    }

    /** @test */
    public function display_404(): void
    {
        $client = self::createHttpBrowserClient();
        $response = $client->request('GET', self::$baseUri . '/404');

        self::assertStringContainsString(
            '404',
            $response->html()
        );
    }
}
