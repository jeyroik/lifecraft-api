<?php
namespace lifecraft\components;

use extas\components\Item;

class Lifecraft extends Item
{
    protected function getSubjectForExtension(): string
    {
        return 'lifecraft';
    }
}
