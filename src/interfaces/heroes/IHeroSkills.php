<?php
namespace lifecraft\interfaces\heroes;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasId;
use lifecraft\interfaces\skills\IHaveSkill;

interface IHeroSkills extends IHaveHero, IHaveSkill, IHasId, IHasCreatedAt
{

}
