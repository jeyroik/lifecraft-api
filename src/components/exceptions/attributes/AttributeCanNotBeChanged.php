<?php
namespace lifecraft\components\exceptions\attributes;

use lifecraft\interfaces\attributes\IAttribute;

class AttributeCanNotBeChanged extends \Exception
{
    public const CHANGE__INC = 'inc';
    public const CHANGE__DEC = 'dec';

    public function __construct(IAttribute $attr, string $changeType = 'inc')
    {
        parent::__construct('Can not ' . $changeType . ' attribute "' . $attr->getName() . '"');
    }
}
