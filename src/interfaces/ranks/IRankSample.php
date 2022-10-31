<?php
namespace lifecraft\interfaces\ranks;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IHasValue;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveRarity;

/**
 * Field "class" is used for checking clauses for attaching rank to a hero.
 */
interface IRankSample extends IItem, IHasId, IHasName, IHasDescription, IHaveRarity, IHasClass
{
    public const SUBJECT = 'lifecraft.rank.sample';
}
