<?php
namespace lifecraft\components\pets;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\pets\IHavePet;
use lifecraft\interfaces\pets\IPet;

/**
 * @property array $config
 * @method IRepository pets()
 */
trait THasPet
{
    public function getPet(): ?IPet
    {
        return $this->pets()->one([
            IPet::FIELD__ID => $this->getPetId()
        ]);
    }

    public function setPet(IPet $pet): IHavePet
    {
        $pet->setOwner($this);
        $pet = $this->pets()->create($pet);

        $this->setPetId($pet->getId());

        return $this;
    }

    public function getPetId(): string
    {
        return $this->config[IHavePet::FIELD__PET_ID] ?? '';
    }

    public function setPetId(string $id): IHavePet
    {
        $this->config[IHavePet::FIELD__PET_ID] = $id;

        return $this;
    }
}
