<?php
namespace lifecraft\components\heroes;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\attributes\THasEnergy;
use lifecraft\components\attributes\THasExperience;
use lifecraft\components\attributes\THasGold;
use lifecraft\components\attributes\THasHealth;
use lifecraft\components\avatars\THasAvatar;
use lifecraft\components\levels\THasLevel;
use lifecraft\interfaces\heroes\IHeroSample;

class HeroSample extends Item implements IHeroSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasAvatar;
    use THasLevel;
    use THasHealth;
    use THasEnergy;
    use THasExperience;
    use THasGold;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
