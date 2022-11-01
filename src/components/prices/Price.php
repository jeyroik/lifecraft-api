<?php
namespace lifecraft\components\prices;

use extas\components\Item;
use extas\components\THasId;
use lifecraft\components\attributes\THasEnergy;
use lifecraft\components\attributes\THasGold;
use lifecraft\components\attributes\THasHealth;
use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\prices\IPrice;

class Price extends Item implements IPrice
{
    use THasId;
    use THasOwner;
    use THasEnergy;
    use THasGold;
    use THasHealth;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
