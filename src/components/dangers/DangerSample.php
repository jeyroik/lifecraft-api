<?php
namespace lifecraft\components\dangers;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\prices\THasPrice;
use lifecraft\interfaces\dangers\IDangerSample;

class DangerSample extends Item implements IDangerSample
{
    use THasId;
    use THasDescription;
    use THasName;
    use THasPrice;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
