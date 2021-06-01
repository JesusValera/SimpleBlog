<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210601210531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create User table';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('users');
        $table->addColumn('id', 'integer')->setAutoincrement(true);
        $table->addColumn('name', 'string');
        $table->addColumn('email', 'string');
        $table->addColumn('password', 'string');
        $table->addUniqueIndex(['email'], 'uq_user_email');
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('posts');
    }
}
