<?php
namespace lifecraft\interfaces\stories;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IItem;

/**
 * Story sample looks like:
 * 
 * title: NPS
 * description: Hero got NPS.
 * 
 * or
 * 
 * title: Task Done
 * description: Done task @task.title, got @tasl.effect_description.
 */
interface IStorySample extends IItem, IHasId, IHasDescription
{
    public const SUBJECT = 'lifecraft.story.sample';
}
