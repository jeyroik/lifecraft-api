<?php
namespace lifecraft\components\achievements;

use extas\components\Item;
use extas\components\THasClass;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\interfaces\achievements\IAchievementSample;

class AchievementSample extends Item implements IAchievementSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasClass;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
