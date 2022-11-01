<?php
namespace lifecraft\components\players\roles;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\interfaces\players\roles\IRole;

class Role extends Item implements IRole
{
    use THasId;
    use THasName;
    use THasDescription;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
