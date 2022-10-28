<?php
namespace lifecraft\interfaces\attributes;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IHasValue;
use extas\interfaces\IItem;
use lifecraft\interfaces\levels\IHaveLevel;
use lifecraft\interfaces\owners\IHaveOwner;

interface IAttribute extends IItem, IHasId, IHasName, IHasDescription, IHasValue, IHaveLevel, IHaveOwner
{
    public const SUBJECT = 'lifecraft.attribute';

    public const FIELD__VALUE_MIN = 'min';
    public const FIELD__VALUE_MAX = 'max';

    public function setMinValue(int $min): IAttribute;
    public function getMinValue(): int;

    public function setMaxValue(int $max): IAttribute;
    public function getMaxValue(): int;

    public function inc(int $increment): int;
    public function dec(int $decrement): int;
}
