<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20210601211222 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create Post table';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('posts');
        $table->addColumn('id', 'integer')->setAutoincrement(true);
        $table->addColumn('slug', 'string');
        $table->addColumn('title', 'string');
        $table->addColumn('content', 'string');
        $table->addColumn('author_id', 'integer');
        $table->addColumn('created_at', Types::DATETIME_IMMUTABLE, ['notnull' => false]);
        $table->addColumn('updated_at', Types::DATETIME_IMMUTABLE, ['notnull' => false]);
        $table->setPrimaryKey(['id']);
        $table->addForeignKeyConstraint('users', ['author_id'], ['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('users');
    }
}
