<?php
namespace lifecraft\interfaces\attributes;

interface IHaveRequiredLevel
{
    public const FIELD__LEVEL_REQUIRED = 'level_required';

    public function getRequiredLevel(): IAttribute;
    public function setRequiredLevel(int $level): IHaveRequiredLevel;

    public function isLevelSatisfaed(IHaveLevel $subject): bool;
}
