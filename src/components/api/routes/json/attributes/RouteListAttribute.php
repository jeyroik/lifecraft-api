<?php
namespace lifecraft\components\api\routes\json\attributes;

use lifecraft\components\api\routes\json\RouteList;

class RouteListAttribute extends RouteList
{
    public const PATH = 'attribute';

    protected string $entityName = 'attribute';
}
