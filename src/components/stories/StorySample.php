<?php
namespace lifecraft\components\stories;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use lifecraft\interfaces\stories\IStorySample;

class StorySample extends Item implements IStorySample
{
    use THasId;
    use THasDescription;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
