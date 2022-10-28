<?php
namespace lifecraft\interfaces\players\roles;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

interface IRole extends IItem, IHasId, IHasName, IHasDescription
{
    public const SUBJECT = 'lifecraft.player.role';

    public const ROLE__NPS = 'nps';
    public const ROLE__MERCENARY = 'mercenary'; // наёмник
    public const ROLE__ALLY = 'ally';
    public const ROLE__ENEMY = 'enemy';
}
