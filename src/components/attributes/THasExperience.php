<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveExperience;

trait THasExperience
{
    use TAttribute;

    public function getExperience(): IAttribute
    {
        return $this->getAttrByOwner(IHaveExperience::FIELD__EXPERIENCE);
    }

    public function setExperience(IAttribute $attribute): IHaveExperience
    {
        return $this->attachAttribute($attribute);
    }

    public function getExperienceValue(): int
    {
        return $this->config[IHaveExperience::FIELD__EXPERIENCE] ?? 0;
    }

    public function setExperienceValue(int $experience): IHaveExperience
    {
        return $this->setAttributeValue($this->getExperience(), $experience, IHaveExperience::FIELD__EXPERIENCE);
    }

    public function incExperience(int $increment): int
    {
        return $this->incAttribute($this->getExperience(), $increment);
    }

    public function decExperience(int $decrement): int
    {
        return $this->decAttribute($this->getExperience(), $decrement);
    }

    public function canIncExperience(int $increment): bool
    {
        return ($e = $this->getExperience()) ? $e->canInc($increment) : false;
    }

    public function canDecExperience(int $decrement): bool
    {
        return ($e = $this->getExperience()) ? $e->canDec($decrement) : false;
    }
}
