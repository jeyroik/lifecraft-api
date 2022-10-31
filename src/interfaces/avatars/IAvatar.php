<?php
namespace lifecraft\interfaces\avatars;

use lifecraft\interfaces\owners\IHaveOwner;

interface IAvatar extends IAvatarSample, IHaveOwner
{
    public const SUBJECT__AVATAR = 'lifecraft.avatar';
}
