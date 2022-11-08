<?php
namespace lifecraft\interfaces\attributes;

interface IHaveHealth
{
    public const FIELD__HEALTH = 'health';

    public function getHealth(): IAttribute;
    public function setHealth(IAttribute $attribute): IHaveHealth;

    public function getHealthValue(): int;
    public function setHealthValue(int $health): IHaveHealth;
}
