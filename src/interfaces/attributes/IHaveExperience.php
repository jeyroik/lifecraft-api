<?php
namespace lifecraft\interfaces\attributes;

interface IHaveExperience
{
    public const FIELD__EXPERIENCE = 'experience';

    public function getExperience(): IAttribute;
    public function setExperience(IAttribute $attribute): IHaveExperience;

    public function getExperienceValue(): int;
    public function setExperienceValue(int $experience): IHaveExperience;

    public function incExperience(int $increment): int;
    public function decExperience(int $decrement): int;

    public function canIncExperience(int $increment): bool;
    public function canDecExperience(int $decrement): bool;
}
