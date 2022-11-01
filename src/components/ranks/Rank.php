<?php
namespace lifecraft\components\ranks;

use lifecraft\components\heroes\THasHero;
use lifecraft\interfaces\ranks\IRank;

class Rank extends RankSample implements IRank
{
    use THasHero;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__RANK;
    }
}
