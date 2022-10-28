<?php
namespace lifecraft\interfaces\players;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use lifecraft\interfaces\heroes\IHaveHero;
use lifecraft\interfaces\players\roles\IHaveRole;

/**
 * Define which player what role is playing for what hero.
 * 
 * p1 h1 merc
 * p2 h1 nps
 * 
 * Player can be NPS foro itself:
 * p1 h1 merc
 * p1 h1 nps
 * 
 * Player can have many players with the same roles:
 * p1 h1 merc
 * p2 h1 nps
 * p3 h1 nps
 * 
 */
interface IPlayerRoleLink extends IItem, IHasId, IHavePlayer, IHaveHero, IHasCreatedAt, IHaveRole
{
    public const SUBJECT = 'lifecraft.player.role.link';
}
