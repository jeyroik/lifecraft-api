<?php
namespace lifecraft\components;

use extas\interfaces\IHasId;
use Ramsey\Uuid\Uuid as UuidRamsey;

class UUid
{
    public static function generateFor(IHasId &$item): void
    {
        $item->setId(static::getId());
    }

    public static function getId(): string
    {
        return UuidRamsey::uuid4()->toString();
    }
}
