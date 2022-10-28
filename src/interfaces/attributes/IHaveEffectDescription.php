<?php
namespace lifecraft\interfaces\attributes;

interface IHaveEffectDescription
{
    public const FIELD__EFFECT_DESCRIPTION = 'effect_description';

    public function getEffectDescription(): string;
    public function setEffectDescription(string $description): IHaveEffectDescription;
}
