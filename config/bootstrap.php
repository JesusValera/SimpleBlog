<?php

declare(strict_types=1);

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

(Dotenv\Dotenv::createImmutable(dirname(__DIR__)))->load();

$paths = [__DIR__ . '/../src/Models'];
$isDevMode = $_ENV['APP_ENV'] === 'local';

$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
    'dbname'   => $_ENV['DB_NAME'],
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);
