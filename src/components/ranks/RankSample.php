<?php
namespace lifecraft\components\ranks;

use extas\components\Item;
use extas\components\THasClass;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\attributes\THasRarity;
use lifecraft\interfaces\ranks\IRankSample;

class RankSample extends Item implements IRankSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasRarity;
    use THasClass;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
