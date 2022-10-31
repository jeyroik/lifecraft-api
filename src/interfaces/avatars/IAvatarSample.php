<?php
namespace lifecraft\interfaces\avatars;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasType;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveRarity;
use lifecraft\interfaces\urls\IHaveUrl;

interface IAvatarSample extends IItem, IHasId, IHasType, IHasDescription, IHaveRarity, IHaveUrl
{
    public const SUBJECT = 'lifecraft.avatar.sample';
}
