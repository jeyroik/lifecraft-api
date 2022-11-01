<?php
namespace lifecraft\components\players;

use extas\components\Item;
use extas\components\THasCreatedAt;
use extas\components\THasId;
use lifecraft\components\heroes\THasHero;
use lifecraft\components\players\roles\THasRole;
use lifecraft\interfaces\players\IPlayerRoleLink;

class PlayerRoleLink extends Item implements IPlayerRoleLink
{
    use THasId;
    use THasHero;
    use THasPlayer;
    use THasRole;
    use THasCreatedAt;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
