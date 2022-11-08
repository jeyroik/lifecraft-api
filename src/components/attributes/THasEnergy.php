<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveEnergy;

trait THasEnergy
{
    use TAttribute;

    public function getEnergy(): IAttribute
    {
        return $this->getAttrByOwner(IHaveEnergy::FIELD__ENERGY);
    }

    public function setEnergy(IAttribute $attribute): IHaveEnergy
    {
        return $this->attachAttribute($attribute);
    }

    public function getEnergyValue(): int
    {
        return $this->config[IHaveEnergy::FIELD__ENERGY] ?? 0;
    }

    public function setEnergyValue(int $energy): IHaveEnergy
    {
        return $this->setAttributeValue($this->getEnergy(), $energy, IHaveEnergy::FIELD__ENERGY);
    }
}
