<?php
namespace lifecraft\interfaces\encoders;

use extas\interfaces\IItem;

interface IEncoder
{
    /**
     * Encodes fields value.
     *
     * @param IItem $item
     * @param array $fields ['fieldName1', 'fieldName2', ...]
     * @return void
     */
    public static function encode(IItem &$item, array $fields): void;
}
