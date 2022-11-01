<?php
namespace lifecraft\components\heroes;

use extas\components\Item;
use extas\components\THasCreatedAt;
use extas\components\THasId;
use lifecraft\components\skills\THasSkill;
use lifecraft\interfaces\heroes\IHeroSkill;

class HeroSkill extends Item implements IHeroSkill
{
    use THasId;
    use THasCreatedAt;
    use THasHero;
    use THasSkill;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
