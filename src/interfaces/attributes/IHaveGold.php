<?php
namespace lifecraft\interfaces\attributes;

interface IHaveGold
{
    public const FIELD__GOLD = 'gold';

    public function getGold(): IAttribute;
    public function setGold(IAttribute $attribute): IHaveGold;

    public function getGoldValue(): int;
    public function setGoldValue(int $gold): IHaveGold;

    public function incGold(int $increment): int;
    public function decGold(int $decrement): int;

    public function canIncGold(int $increment): bool;
    public function canDecGold(int $decrement): bool;
}
