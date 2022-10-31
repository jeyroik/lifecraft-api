<?php
namespace lifecraft\interfaces\tasks;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\prices\IHavePrice;

interface ITaskSample extends IItem, IHasId, IHasName, IHasDescription, IHavePrice
{
    public const SUBJECT = 'lifecraft.task.sample';
}
