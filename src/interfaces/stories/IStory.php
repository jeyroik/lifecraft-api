<?php
namespace lifecraft\interfaces\stories;

use lifecraft\interfaces\heroes\IHaveHero;

/**
 * Story looks like:
 * 
 * title: NPS
 * description: Hero got NPS.
 * 
 * or
 * 
 * title: Task Done
 * description: Done task "Some task title", got "Same task effect description".
 */
interface IStory extends IStorySample, IHaveHero
{
    public const SUBJECT__STORY = 'lifecraft.story';
}
