<?php
namespace lifecraft\interfaces\dangers;

use lifecraft\interfaces\heroes\IHaveHero;

interface IDanger extends IDangerSample, IHaveHero
{
    public const SUBJECT__DANGER = 'lifecraft.danger';
}
