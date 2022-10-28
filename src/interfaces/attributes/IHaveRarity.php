<?php
namespace lifecraft\interfaces\attributes;

interface IHaveRarity
{
    public const FIELD__RARITY = 'rarity';

    public function getRarity(): IAttribute;
    public function setRarity(IAttribute $attribute): IHaveRarity;

    public function getRarityValue(): int;
    public function setRarityValue(int $Rarity): IHaveRarity;

    public function incRarity(int $increment): int;
    public function decRarity(int $decrement): int;

    public function canIncRarity(int $increment): bool;
    public function canDecRarity(int $decrement): bool;
}
