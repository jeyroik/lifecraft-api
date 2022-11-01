<?php
namespace lifecraft\components\tasks;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\prices\THasPrice;
use lifecraft\interfaces\tasks\ITaskSample;

class TaskSample extends Item implements ITaskSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasPrice;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
