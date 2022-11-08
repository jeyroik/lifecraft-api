<?php
namespace lifecraft\components\encoders;

use extas\interfaces\IItem;
use lifecraft\interfaces\encoders\IEncoder;

class EncoderSha1 implements IEncoder
{
    /**
     * Encodes only plain (string, int, float, bool) values.
     *
     * @param IItem $item
     * @param array $fields
     * @return void
     */
    public static function encode(IItem &$item, array $fields): void
    {
        foreach ($fields as $name) {
            if (is_string($item[$name])) {
                $item[$name] = sha1($item[$name]);
            }
        }
    }
}
