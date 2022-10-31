<?php
namespace lifecraft\interfaces\dangers;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\prices\IHavePrice;

interface IDangerSample extends IItem, IHasId, IHasDescription, IHasName, IHavePrice
{
    public const SUBJECT = 'lifecraft.danger.sample';
}
