<?php
namespace lifecraft\components\stories;

use lifecraft\components\heroes\THasHero;
use lifecraft\interfaces\stories\IStory;

class Story extends StorySample implements IStory
{
    use THasHero;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__STORY;
    }
}
