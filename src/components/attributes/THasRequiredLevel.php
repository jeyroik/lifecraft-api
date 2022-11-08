<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveLevel;
use lifecraft\interfaces\attributes\IHaveRequiredLevel;

/**
 * @property array $config
 */
trait THasRequiredLevel
{
    use TAttribute;

    public function getRequiredLevel(): IAttribute
    {
        return $this->getAttrByOwner(IHaveRequiredLevel::FIELD__LEVEL_REQUIRED);
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
