<?php
namespace lifecraft\components\api\routes\json\heroes;

use lifecraft\components\api\routes\json\RouteList;

class RouteListHero extends RouteList
{
    public const PATH = 'hero';

    protected string $entityName = 'heroe';
    protected bool $withAttributes = true;
}
