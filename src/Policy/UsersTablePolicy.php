<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\UsersTable;
use Authorization\IdentityInterface;
use Cake\ORM\ResultSet;

/**
 * Users policy
 */
class UsersTablePolicy
{
    public function canIndex(IdentityInterface $user, UsersTable $resource)
    {
        return true;
    }
}
