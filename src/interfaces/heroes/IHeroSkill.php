<?php
namespace lifecraft\interfaces\heroes;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasId;
use lifecraft\interfaces\skills\IHaveSkill;

interface IHeroSkill extends IHaveHero, IHaveSkill, IHasId, IHasCreatedAt
{
    public const SUBJECT = 'liffecraft.hero.skill.link';
}
