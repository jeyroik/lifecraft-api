<?php
namespace lifecraft\components\api\routes\json\attributes;

use lifecraft\components\api\routes\json\RouteList;

class RouteListAttributeSample extends RouteList
{
    public const PATH = 'attribute-sample';

    protected string $entityName = 'attributes_sample';
}
