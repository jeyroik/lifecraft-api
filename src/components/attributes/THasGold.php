<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveGold;

trait THasGold
{
    use TAttribute;

    public function getGold(): IAttribute
    {
        return $this->getAttrByOwner(IHaveGold::FIELD__GOLD);
    }

    public function setGold(IAttribute $attribute): IHaveGold
    {
        return $this->attachAttribute($attribute);
    }

    public function getGoldValue(): int
    {
        return $this->config[IHaveGold::FIELD__GOLD] ?? 0;
    }

    public function setGoldValue(int $gold): IHaveGold
    {
        return $this->setAttributeValue($this->getGold(), $gold, IHaveGold::FIELD__GOLD);
    }
}
