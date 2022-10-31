<?php
namespace lifecraft\interfaces\ranks;

use lifecraft\interfaces\heroes\IHaveHero;

interface IRank extends IRankSample, IHaveHero
{
    public const SUBJECT__RANK = 'lifecraft.rank';
}
