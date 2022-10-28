<?php
namespace lifecraft\interfaces\attributes;

interface IHaveHealth
{
    public const FIELD__HEALTH = 'health';

    public function getHealth(): IAttribute;
    public function setHealth(IAttribute $attribute): IHaveHealth;

    public function getHealthValue(): int;
    public function setHealthValue(int $health): IHaveHealth;

    public function incHealth(int $increment): int;
    public function decHealth(int $decrement): int;

    public function canIncHealth(int $increment): bool;
    public function canDecHealth(int $decrement): bool;
}
