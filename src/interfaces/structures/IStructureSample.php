<?php
namespace lifecraft\interfaces\structures;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveEffectDescription;
use lifecraft\interfaces\avatars\IHaveAvatar;
use lifecraft\interfaces\levels\IHaveLevel;
use lifecraft\interfaces\levels\IHaveRequiredLevel;
use lifecraft\interfaces\prices\IHavePrice;

interface IStructureSample extends IItem, IHasId, IHasName, IHasDescription, 
    IHaveLevel, IHaveAvatar, IHaveRequiredLevel, IHaveEffectDescription, IHavePrice
{
    public const SUBJECT = 'lifecraft.structure.sample';
}
