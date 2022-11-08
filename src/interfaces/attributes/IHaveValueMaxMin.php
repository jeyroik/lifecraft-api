<?php
namespace lifecraft\interfaces\attributes;

use extas\interfaces\IHasValue;

interface IHaveValueMaxMin extends IHasValue
{
    public const FIELD__VALUE_MIN = 'min_value';
    public const FIELD__VALUE_MAX = 'max_value';

    public const VALUE__INF = -1;

    public function setMinValue(int $min): self;
    public function getMinValue(): int;

    public function setMaxValue(int $max): self;
    public function getMaxValue(): int;

    public function inc(int $increment): int;
    public function dec(int $decrement): int;

    public function canInc(int $increment): bool;
    public function canDec(int $decrement): bool;
}
