<?php
namespace lifecraft\interfaces\levels;

interface IHaveRequiredLevel
{
    public const FIELD__LEVEL_REQUIRED = 'level_required';

    public function getRequiredLevel(): int;
    public function setRequiredLevel(int $level): IHaveRequiredLevel;

    public function isLevelSatisfaed(IHaveLevel $subject): bool;
}
