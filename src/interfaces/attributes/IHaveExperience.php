<?php
namespace lifecraft\interfaces\attributes;

interface IHaveExperience
{
    public const FIELD__EXPERIENCE = 'experience';

    public function getExperience(): IAttribute;
    public function setExperience(IAttribute $attribute): IHaveExperience;

    public function getExperienceValue(): int;
    public function setExperienceValue(int $experience): IHaveExperience;
}
