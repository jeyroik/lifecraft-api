<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveLevel;

/**
 * @property array $config
 */
trait THasLevel
{
    use TAttribute;

    public function getLevel(): IAttribute
    {
        return $this->getAttrByOwner(IHaveLevel::FIELD__LEVEL);
    }

    public function setLevel(IAttribute $level): IHaveLevel
    {
        return $this->attachAttribute($level);
    }

    public function getLevelValue(): int
    {
        return $this->config[IHaveLevel::FIELD__LEVEL] ?? 0;
    }
    
    public function setLevelValue(int $value): IHaveLevel
    {
        return $this->setAttributeValue($this->getLevel(), $value, IHaveLevel::FIELD__LEVEL);
    }
}
