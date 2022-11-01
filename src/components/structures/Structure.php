<?php
namespace lifecraft\components\structures;

use lifecraft\components\heroes\THasHero;
use lifecraft\interfaces\structures\IStructure;

class Structure extends StructureSample implements IStructure
{
    use THasHero;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__STRUCTURE;
    }
}
