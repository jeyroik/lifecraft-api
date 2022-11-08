<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveHealth;

/**
 * @property array $config
 * @method IRepository attributes()
 * @method string getId()
 */
trait THasHealth
{
    use TAttribute;

    public function getHealth(): IAttribute
    {
        return $this->getAttrByOwner(IHaveHealth::FIELD__HEALTH);
    }

    public function setHealth(IAttribute $attribute): IHaveHealth
    {
        return $this->attachAttribute($attribute);
    }

    public function getHealthValue(): int
    {
        return $this->config[IHaveHealth::FIELD__HEALTH] ?? 0;
    }

    public function setHealthValue(int $health): IHaveHealth
    {
        return $this->setAttributeValue($this->getHealth(), $health, IHaveHealth::FIELD__HEALTH);
    }
}
