<?php
namespace lifecraft\interfaces\players\roles;

interface IHaveRole
{
    public const FIELD__ROLE_ID = 'role_id';

    public function getRoleId(): string;
    public function setRoleId(string $id): IHaveRole;

    public function getRole(): ?IRole;
    public function setRole(IRole $role): IHaveRole;
}
