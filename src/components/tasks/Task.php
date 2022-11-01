<?php
namespace lifecraft\components\tasks;

use lifecraft\components\heroes\THasHero;
use lifecraft\interfaces\tasks\ITask;

class Task extends TaskSample implements ITask
{
    use THasHero;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__TASK;
    }
}
