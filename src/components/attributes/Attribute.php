<?php
namespace lifecraft\components\attributes;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use extas\components\THasValue;
use lifecraft\components\levels\THasLevel;
use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\attributes\IAttribute;

class Attribute extends Item implements IAttribute
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasLevel;
    use THasValue;
    use THasOwner;

    public function setMinValue(int $min): IAttribute
    {
        $this->config[static::FIELD__VALUE_MIN] = $min;

        return $this;
    }

    public function getMinValue(): int
    {
        return $this->config[static::FIELD__VALUE_MIN] ?? 0;
    }

    public function setMaxValue(int $max): IAttribute
    {
        $this->config[static::FIELD__VALUE_MAX] = $max;

        return $this;
    }

    public function getMaxValue(): int
    {
        return $this->config[static::FIELD__VALUE_MAX] ?? 0;
    }

    public function inc(int $increment): int
    {
        if (($this->getValue()+$increment) <= $this->getMaxValue()) {
            $this->config[static::FIELD__VALUE] += $increment;
            return $this->config[static::FIELD__VALUE];
        }

        throw new \Exception('Can not increment value: incorrect incrementer');
    }

    public function dec(int $decrement): int
    {
        if (($this->getValue()-$decrement) <= $this->getMinValue()) {
            $this->config[static::FIELD__VALUE] -= $decrement;
            return $this->config[static::FIELD__VALUE];
        }

        throw new \Exception('Can not decrement value: incorrect decrementer');
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
