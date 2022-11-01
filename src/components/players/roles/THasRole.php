<?php
namespace lifecraft\components\players\roles;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\players\roles\IHaveRole;
use lifecraft\interfaces\players\roles\IRole;

/**
 * @property array $config
 * @method IRepository roles()
 */
trait THasRole
{
    public function getRole(): ?IRole
    {
        return $this->roles()->one([
            IRole::FIELD__ID => $this->getRoleId()
        ]);
    }

    public function setRole(IRole $role): IHaveRole
    {
        return $this->setRoleId($role->getId());
    }

    public function getRoleId(): string
    {
        return $this->config[IHaveRole::FIELD__ROLE_ID] ?? '';
    }

    public function setRoleId(string $id): IHaveRole
    {
        $this->config[IHaveRole::FIELD__ROLE_ID] = $id;

        return $this;
    }
}
