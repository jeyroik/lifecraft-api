<?php
namespace lifecraft\components\achievements;

use lifecraft\components\heroes\THasHero;
use lifecraft\interfaces\achievements\IAchievement;

class Achievement extends AchievementSample implements IAchievement
{
    use THasHero;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__ACHIEVEMENT;
    }
}
