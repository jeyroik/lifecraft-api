<?php
namespace lifecraft\components\pets;

use extas\components\Item;
use extas\components\THasClass;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\attributes\THasEffectDescription;
use lifecraft\components\attributes\THasEnergy;
use lifecraft\components\attributes\THasExpBuffered;
use lifecraft\components\attributes\THasGold;
use lifecraft\components\attributes\THasHealth;
use lifecraft\components\attributes\THasLevel;
use lifecraft\components\avatars\THasAvatar;
use lifecraft\interfaces\pets\IPetSample;

class PetSample extends Item implements IPetSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasClass;
    use THasLevel;
    use THasAvatar;
    use THasHealth;
    use THasEnergy;
    use THasGold;
    use THasExpBuffered;
    use THasEffectDescription;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
