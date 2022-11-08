<?php
namespace lifecraft\interfaces\attributes;

use lifecraft\interfaces\owners\IHaveOwner;

interface IAttribute extends IAttributeSample, IHaveOwner
{
    public const SUBJECT__ATTRIBUTE = 'lifecraft.attribute';
}
