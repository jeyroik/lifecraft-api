<?php
namespace lifecraft\components\exceptions;

class SpecifiedInstanceIsRequired extends \Exception
{
    public function __construct(string $className)
    {
        parent::__construct($className . ' instance is required');
    }
}
