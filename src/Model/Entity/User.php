<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

    /**
     * parent node method
     * @return array
     */
//    public function parentNode()
//    {
//        if (!$this->id) {
//            return null;
//        }
//
//        if (isset($this->group_id)) {
//            $groupId = $this->group_id;
//        } else {
//            $Users = TableRegistry::getTableLocator()->get('Users');
//            $user = $users->find()
//                ->select(['group_id'])
//                ->where(['id' => $this->id])
//                ->first();
//            $groupId = $user->group_id;
//        }
//
//        if (!$groupId) {
//            return null;
//        }
//
//        return ['Groups' => ['id' => $groupId]];
//    }
}
