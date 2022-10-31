<?php
namespace lifecraft\interfaces\achievements;

use lifecraft\interfaces\heroes\IHaveHero;

interface IAchievement extends IAchievementSample, IHaveHero
{
    public const SUBJECT__ACHIEVEMENT = 'lifecraft.achievement';
}
