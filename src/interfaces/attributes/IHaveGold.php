<?php
namespace lifecraft\interfaces\attributes;

interface IHaveGold
{
    public const FIELD__GOLD = 'gold';

    public function getGold(): IAttribute;
    public function setGold(IAttribute $attribute): IHaveGold;

    public function getGoldValue(): int;
    public function setGoldValue(int $gold): IHaveGold;
}
