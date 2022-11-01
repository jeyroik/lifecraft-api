<?php
namespace lifecraft\components\dangers;

use lifecraft\components\heroes\THasHero;
use lifecraft\interfaces\dangers\IDanger;

class Danger extends DangerSample implements IDanger
{
    use THasHero;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__DANGER;
    }
}
