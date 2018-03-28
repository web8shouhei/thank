<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('categories', ['id' => false, 'primary_key' => ['']])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('label', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();

        $this->table('posts', ['id' => false, 'primary_key' => ['']])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('open_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_open', 'integer', [
                'default' => '1',
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('is_delete', 'integer', [
                'default' => '0',
                'limit' => 1,
                'null' => false,
            ])
            ->create();

        $this->table('tags', ['id' => false, 'primary_key' => ['']])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('label', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('categories');
        $this->dropTable('posts');
        $this->dropTable('tags');
    }
}
