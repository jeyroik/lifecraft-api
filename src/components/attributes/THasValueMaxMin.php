<?php
namespace lifecraft\components\attributes;

use extas\components\THasValue;
use lifecraft\interfaces\attributes\IHaveValueMaxMin;

/**
 * @property array $config
 */
trait THasValueMaxMin
{
    use THasValue;

    public function setMinValue(int $min): self
    {
        if ($this->isMaxInf() || ($min < $this->getMaxValue())) {
            $this->config[IHaveValueMaxMin::FIELD__VALUE_MIN] = $min;
            return $this;
        }

        throw new \Exception('Min value can not be higher than max value');
    }

    /**
     * @description_en Minimum value
     * @description_ru Минимальное значение
     * @use_in ui
     * @return_min 0
     * @return_max -1
     *
     * @return integer
     */
    public function getMinValue(): int
    {
        return $this->config[IHaveValueMaxMin::FIELD__VALUE_MIN] ?? 0;
    }

    public function setMaxValue(int $max): self
    {
        if ($this->isMaxInf($max) || ($max > $this->getMinValue())) {
            $this->config[IHaveValueMaxMin::FIELD__VALUE_MAX] = $max;
            return $this;
        }

        throw new \Exception('Max value can not be lower than min value');
    }

    /**
     * @description_en Maximum value
     * @description_ru Максимальное значение
     * @use_in ui
     * @return_min 0
     * @return_max -1
     *
     * @return integer
     */
    public function getMaxValue(): int
    {
        return $this->config[IHaveValueMaxMin::FIELD__VALUE_MAX] ?? 0;
    }

    public function inc(int $increment): int
    {
        if ($this->canInc($increment)) {
            $this->config[IHaveValueMaxMin::FIELD__VALUE] += $increment;
            return $this->config[IHaveValueMaxMin::FIELD__VALUE];
        }

        throw new \Exception('Can not increment value: incorrect incrementer');
    }

    public function dec(int $decrement): int
    {
        if ($this->canDec($decrement)) {
            $this->config[IHaveValueMaxMin::FIELD__VALUE] -= $decrement;
            return $this->config[IHaveValueMaxMin::FIELD__VALUE];
        }

        throw new \Exception('Can not decrement value: incorrect decrementer');
    }

    public function canInc(int $increment): bool
    {
        return $this->isLowerThanMax($this->getValue()+$increment);
    }

    public function canDec(int $decrement): bool
    {
        return $this->getValue()-$decrement <= $this->getMinValue();
    }

    protected function isLowerThanMax(int $value): bool
    {
        return ($value <= $this->config[IHaveValueMaxMin::FIELD__VALUE_MAX]) || $this->isMaxInf();
    }

    protected function isMaxInf(int $max = null): bool
    {
        $max = $max ?: $this->config[IHaveValueMaxMin::FIELD__VALUE_MAX];

        return $max == IHaveValueMaxMin::VALUE__INF;
    }
}
