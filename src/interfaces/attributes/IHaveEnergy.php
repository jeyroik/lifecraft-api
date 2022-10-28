<?php
namespace lifecraft\interfaces\attributes;

interface IHaveEnergy
{
    public const FIELD__ENERGY = 'energy';

    public function getEnergy(): IAttribute;
    public function setEnergy(IAttribute $attribute): IHaveEnergy;

    public function getEnergyValue(): int;
    public function setEnergyValue(int $Energy): IHaveEnergy;

    public function incEnergy(int $increment): int;
    public function decEnergy(int $decrement): int;

    public function canIncEnergy(int $increment): bool;
    public function canDecEnergy(int $decrement): bool;
}
