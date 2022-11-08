<?php
namespace lifecraft\components\owners;

use extas\interfaces\IHasId;
use lifecraft\interfaces\owners\IHaveOwner;

/**
 * @property array $config
 */
trait THasOwner
{
    /**
     * @description_en Owner ID
     * @description_ru ID владельца
     * @use_in ui
     * @return_max 36
     *
     * @return uuid
     */
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
