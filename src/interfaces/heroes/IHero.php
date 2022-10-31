<?php
namespace lifecraft\interfaces\heroes;

use lifecraft\interfaces\players\IHavePlayer;

interface IHero extends IHeroSample, IHavePlayer
{
    public const SUBJECT__HERO = 'lifecraft.hero';
}
