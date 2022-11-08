<?php
namespace lifecraft\interfaces\routes;

use extas\interfaces\IHasClass;

interface IHaveDispatcher extends IHasClass
{
    public function buildDispatcher(...$params): mixed;
}
