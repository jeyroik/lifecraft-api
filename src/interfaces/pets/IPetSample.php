<?php
namespace lifecraft\interfaces\pets;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveEffectDescription;
use lifecraft\interfaces\attributes\IHaveEnergy;
use lifecraft\interfaces\attributes\IHaveExpBuffered;
use lifecraft\interfaces\attributes\IHaveGold;
use lifecraft\interfaces\attributes\IHaveHealth;
use lifecraft\interfaces\avatars\IHaveAvatar;
use lifecraft\interfaces\levels\IHaveLevel;

interface IPetSample extends IItem, IHasId, IHasName, IHasDescription, IHasClass,
    IHaveLevel, IHaveHealth, IHaveEnergy, IHaveGold, IHaveExpBuffered, IHaveAvatar, IHaveEffectDescription
{
    public const SUBJECT = 'lifecraft.pet.sample';
}