<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Create the users table
     */
    public function change()
    {
        $table = $this->table('users');
        $table
            ->addColumn('email', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('password', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('role', 'string', [
                'limit' => 20,
                'null' => false
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'null' => false
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => true
            ]);

        $table->create();
    }

    /**
     * remove table when when rollback is called
     * @return void
     */
    public function down(): void
    {
        $this->table('users')->drop()->save();
    }

}
