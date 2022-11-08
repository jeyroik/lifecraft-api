<?php
namespace lifecraft\components\attributes;

use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\attributes\IAttribute;

class Attribute extends AttributeSample implements IAttribute
{
    use THasOwner;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__ATTRIBUTE;
    }
}
