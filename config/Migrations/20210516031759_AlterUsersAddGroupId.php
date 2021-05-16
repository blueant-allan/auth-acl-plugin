<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterUsersAddGroupId extends AbstractMigration
{
    /**
     * Alter users table
     *
     * add gruop_id
     * remove role
     */
    public function change()
    {
        $table = $this->table('users');
        $table->removeColumn('role')
            ->addColumn('group_id', 'integer', [
                'null' => false
            ])
            ->update();
    }

    /**
     * remove table when when rollback is called
     * @return void
     */
    public function down(): void
    {
        $this->table('users')
            ->removeColumn('group_id')
            ->addColumn('role', 'string', [
                'limit' => 20,
                'null' => false
            ])
            ->save();
    }
}
