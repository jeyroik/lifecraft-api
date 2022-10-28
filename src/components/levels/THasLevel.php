<?php
namespace lifecraft\components\levels;

use lifecraft\interfaces\levels\IHaveLevel;

/**
 * @property array $config
 */
trait THasLevel
{
    public function getLevel(): int
    {
        return $this->config[IHaveLevel::FIELD__LEVEL] ?? 0;
    }

    public function setLevel(int $level): IHaveLevel
    {
        if (($level <= $this->getMaxLevel()) && ($level >= $this->getMinLevel())) {
            $this->config[IHaveLevel::FIELD__LEVEL] = $level;
        } else {
            throw new \Exception('Incorrect level. Please, set value min >= level <= max.');
        }

        return $this;
    }

    public function getMaxLevel(): int
    {
        return $this->config[IHaveLevel::FIELD__LEVEL_MAX] ?? 0;
    }

    public function setMaxLevel(int $max): IHaveLevel
    {
        if ($max >= $this->getMinLevel()) {
            $this->config[IHaveLevel::FIELD__LEVEL_MAX] = $max;
        } else {
            throw new \Exception('Max level can not be lower than min level');
        }

        return $this;
    }

    public function getMinLevel(): int
    {
        return $this->config[IHaveLevel::FIELD__LEVEL_MIN] ?? 0;
    }

    public function setMinLevel(int $level): IHaveLevel
    {
        if ($level <= $this->getMaxLevel()) {
            $this->config[IHaveLevel::FIELD__LEVEL_MAX] = $level;
        } else {
            throw new \Exception('Min level can not be higher than max level');
        }

        return $this;
    }

    public function canIncLevel(int $increment): bool
    {
        return ($this->getLevel() + $increment) <= $this->getMaxLevel();
    }

    public function canDecLevel(int $decrement): bool
    {
        return ($this->getLevel() - $decrement) >= $this->getMinLevel();
    }

    public function incLevel(int $increment): int
    {
        if ($this->canIncLevel($increment)) {
            $this->config[IHaveLevel::FIELD__LEVEL] += $increment;
            return $this->config[IHaveLevel::FIELD__LEVEL];
        }

        throw new \Exception('Can not increment level: incorrect increment');
    }

    public function decLevel(int $decrement): int
    {
        if ($this->canDecLevel($decrement)) {
            $this->config[IHaveLevel::FIELD__LEVEL] -= $decrement;
            return $this->config[IHaveLevel::FIELD__LEVEL];
        }

        throw new \Exception('Can not decrement level: incorrect decrement');
    }
}
