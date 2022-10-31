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

    public function incGold(int $increment): int
    {
        return $this->incAttribute($this->getGold(), $increment);
    }

    public function decGold(int $decrement): int
    {
        return $this->decAttribute($this->getGold(), $decrement);
    }

    public function canIncGold(int $increment): bool
    {
        return ($g = $this->getGold()) ? $g->canInc($increment) : false;
    }

    public function canDecGold(int $decrement): bool
    {
        return ($g = $this->getGold()) ? $g->canDec($decrement) : false;
    }
}
