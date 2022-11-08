<?php
namespace lifecraft\interfaces\routes;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

interface IRoute extends IItem, IHasId, IHaveDispatcher, IHasDescription, IHasName
{
    public const SUBJECT = 'lifercfat.route';

    public const FIELD__METHOD = 'method';

    public const METHOD__CREATE = 'post';
    public const METHOD__READ = 'get';
    public const METHOD__UPDATE = 'put';
    public const METHOD__DELETE = 'delete';

    public function getMethod(): string;
    public function setMethod(string $method);
}
