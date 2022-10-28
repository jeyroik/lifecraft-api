<?php
namespace lifecraft\components\owners;

use extas\interfaces\IHasId;
use lifecraft\interfaces\owners\IHaveOwner;

/**
 * @property array $config
 */
trait THasOwner
{
    public function getOwnerId(): string
    {
        return $this->config[IHaveOwner::FIELD__OWNER_ID] ?? '';
    }

    public function setOwnerId(string $id): IHaveOwner
    {
        $this->config[IHaveOwner::FIELD__OWNER_ID] = $id;

        return $this;
    }

    public function getOwner(string $ownersRepoName): ?IHasId
    {
        return $this->$ownersRepoName()->one([IHasId::FIELD__ID => $this->getOwnerId()]);
    }

    public function setOwner(IHasId $owner): IHaveOwner
    {
        return $this->setOwnerId($owner->getId());
    }
}
