<?php
namespace lifecraft\interfaces\owners;

use extas\interfaces\IHasId;

interface IHaveOwner
{
    public const FIELD__OWNER_ID = 'owner_id';

    public function getOwnerId(): string;
    public function setOwnerId(string $id): IHaveOwner;

    public function getOwner(string $ownersRepoName): IHasId;
    public function setOwner(IHasId $owner): IHaveOwner;
}
