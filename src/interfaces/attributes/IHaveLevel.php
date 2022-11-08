<?php
namespace lifecraft\interfaces\attributes;

interface IHaveLevel
{
    public const FIELD__LEVEL = 'level';

    public function getLevel(): IAttribute;
    public function setLevel(IAttribute $level): IHaveLevel;

    public function getLevelValue(): int;
    public function setLevelValue(int $level): IHaveLevel;
}
