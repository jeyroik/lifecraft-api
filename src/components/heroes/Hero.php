<?php
namespace lifecraft\components\heroes;

use lifecraft\components\players\THasPlayer;
use lifecraft\interfaces\heroes\IHero;

class Hero extends HeroSample implements IHero
{
    use THasPlayer;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__HERO;
    }
}
