<?php
namespace lifecraft\interfaces\structures;

use lifecraft\interfaces\players\IHavePlayer;

interface IStructure extends IStructureSample, IHavePlayer
{
    public const SUBJECT__STRUCTURE = 'lifecraft.structure';
}
