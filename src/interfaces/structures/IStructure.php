<?php
namespace lifecraft\interfaces\structures;

use lifecraft\interfaces\heroes\IHaveHero;

interface IStructure extends IStructureSample, IHaveHero
{
    public const SUBJECT__STRUCTURE = 'lifecraft.structure';
}
