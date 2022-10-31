<?php
namespace lifecraft\interfaces\heroes;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveEnergy;
use lifecraft\interfaces\attributes\IHaveExperience;
use lifecraft\interfaces\attributes\IHaveGold;
use lifecraft\interfaces\attributes\IHaveHealth;
use lifecraft\interfaces\levels\IHaveLevel;
use lifecraft\interfaces\avatars\IHaveAvatar;

interface IHeroSample extends IItem,
    IHasId, IHasName, IHasDescription, IHaveAvatar, 
    IHaveHealth, IHaveEnergy, IHaveExperience, IHaveGold, IHaveLevel
{
    public const SUBJECT = 'lifecraft.hero.sample';
}
