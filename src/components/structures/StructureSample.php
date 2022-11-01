<?php
namespace lifecraft\components\structures;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\attributes\THasEffectDescription;
use lifecraft\components\avatars\THasAvatar;
use lifecraft\components\levels\THasLevel;
use lifecraft\components\levels\THasRequiredLevel;
use lifecraft\components\prices\THasPrice;
use lifecraft\interfaces\structures\IStructureSample;

class StructureSample extends Item implements IStructureSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasLevel;
    use THasAvatar;
    use THasRequiredLevel;
    use THasEffectDescription;
    use THasPrice;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
