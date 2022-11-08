<?php
namespace lifecraft\interfaces\levels\dispatchers;

use extas\interfaces\IHasName;

interface ILevelDispatcher
{
    public function nextLevel(IHasName $subject, int $prevLvl, int $nextLvl): void;
}
