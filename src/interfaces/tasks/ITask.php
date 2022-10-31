<?php
namespace lifecraft\interfaces\tasks;

use lifecraft\interfaces\heroes\IHaveHero;

interface ITask extends ITaskSample, IHaveHero
{
    public const SUBJECT__TASK = 'lifecraft.task';
}
