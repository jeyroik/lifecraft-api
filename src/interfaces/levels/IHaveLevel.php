<?php
namespace lifecraft\interfaces\levels;

interface IHaveLevel
{
    public const FIELD__LEVEL = 'level';
    public const FIELD__LEVEL_MIN = 'level_min';
    public const FIELD__LEVEL_MAX = 'level_max';

    public function getLevel(): int;
    public function setLevel(int $level): IHaveLevel;

    public function getMaxLevel(): int;
    public function setMaxLevel(int $max): IHaveLevel;

    public function getMinLevel(): int;
    public function setMinLevel(int $level): IHaveLevel;

    public function incLevel(int $increment): int;
    public function decLevel(int $decrement): int;

    public function canIncLevel(int $increment): bool;
    public function canDecLevel(int $decrement): bool;
}
