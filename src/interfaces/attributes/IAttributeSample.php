<?php
namespace lifecraft\interfaces\attributes;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\levels\dispatchers\IHaveLevelDispatcher;

interface IAttributeSample extends IItem, IHasId, IHasName, IHasDescription, IHaveValueMaxMin,  IHaveLevelDispatcher
{
    public const SUBJECT = 'lifecraft.attribute.sample';

    public const FIELD__LEVEL = 'level';

    public function getLevel(): int;
    public function incLevel(int $increment = 1): int;
}
