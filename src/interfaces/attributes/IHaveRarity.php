<?php
namespace lifecraft\interfaces\attributes;

interface IHaveRarity
{
    public const FIELD__RARITY = 'rarity';

    public function getRarity(): IAttribute;
    public function setRarity(IAttribute $attribute): IHaveRarity;

    public function getRarityValue(): int;
    public function setRarityValue(int $rarity): IHaveRarity;
}
