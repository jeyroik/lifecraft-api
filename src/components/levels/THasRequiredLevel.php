<?php
namespace lifecraft\components\levels;

use lifecraft\interfaces\levels\IHaveLevel;
use lifecraft\interfaces\levels\IHaveRequiredLevel;

/**
 * @property array $config
 */
trait THasRequiredLevel
{
    public function getRequiredLevel(): int
    {
        return $this->config[IHaveRequiredLevel::FIELD__LEVEL_REQUIRED] ?? 0;
    }

    public function setRequiredLevel(int $level): IHaveRequiredLevel
    {
        $this->config[IHaveRequiredLevel::FIELD__LEVEL_REQUIRED] = $level;

        return $this;
    }

    public function isLevelSatisfaed(IHaveLevel $subject): bool
    {
        return $subject->getLevel() >= $this->getRequiredLevel();
    }
}
