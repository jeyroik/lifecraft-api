<?php
namespace lifecraft\components\avatars;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasType;
use lifecraft\components\attributes\THasRarity;
use lifecraft\components\attributes\THasUrl;
use lifecraft\interfaces\avatars\IAvatarSample;

class AvatarSample extends Item implements IAvatarSample
{
    use THasId;
    use THasType;
    use THasDescription;
    use THasUrl;
    use THasRarity;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
