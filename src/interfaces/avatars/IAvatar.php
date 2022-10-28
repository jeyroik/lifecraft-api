<?php
namespace lifecraft\interfaces\avatars;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasType;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveRarity;

interface IAvatar extends IItem, IHasId, IHasType, IHasDescription, IHaveRarity
{
    public const SUBJECT = 'lifecraft.avatar';

    public const FIELD__URL = 'url';

    public function getUrl(): string;
    public function setUrl(string $url): IAvatar;
}
