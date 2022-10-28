<?php
namespace lifecraft\interfaces\prices;

use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveEnergy;
use lifecraft\interfaces\attributes\IHaveGold;
use lifecraft\interfaces\attributes\IHaveHealth;
use lifecraft\interfaces\owners\IHaveOwner;

interface IPrice extends IItem, IHasId, IHaveOwner, IHaveHealth, IHaveEnergy, IHaveGold
{
    public const SUBJECT = 'lifecraft.price';
}
