<?php
namespace lifecraft\interfaces\achievements;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

/**
 * Field "class" is used for checking clauses to attach avhiement to a hero.
 */
interface IAchievementSample extends IItem, IHasId, IHasName, IHasDescription, IHasClass
{
    public const SUBJECT = 'lifecraft.achievement.sample';
}
