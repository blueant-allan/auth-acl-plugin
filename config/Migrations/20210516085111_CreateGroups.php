<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateGroups extends AbstractMigration
{
    /**
     * Create groups table
     *
     */
    public function change()
    {
        $table = $this->table('groups');
        $table
            ->addColumn('name', 'string', [
                'limit' => 255,
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
        $this->table('groups')->drop()->save();
    }
}
