<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\User;
use Authorization\IdentityInterface;

class UserPolicy
{
    public function canUpdate(IdentityInterface $user, User $userEntity)
    {
        return $user->id == $userEntity->id;
    }

    public function canView(IdentityInterface $user, User $resource)
    {
        return true;
    }


    public function canWelcome(IdentityInterface $user, User $resource)
    {
//        dump($user->getOriginalData()->id);
//        dump($resource);
//        exit;
//        return true;
//        echo $user->getOriginalData()->id;
//        echo $resource->id;
        //return $user->getOriginalData()->id == $resource->id ? true : false;

        return isset($resource->flag) ? true : false;
    }
}