<?php
namespace lifecraft\components\api\routes\json\heroes;

use extas\interfaces\repositories\IRepository;
use lifecraft\components\api\routes\json\RouteList;

/**
 * @property IRepository $attributes
 */
class RouteListHeroSample extends RouteList
{
    public const PATH = 'hero-sample';

    protected string $entityName = 'heroes_sample';
    protected bool $withAttributes = true;
}
