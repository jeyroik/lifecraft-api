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
}
