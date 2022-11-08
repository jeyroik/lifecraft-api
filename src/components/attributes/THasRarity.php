<?php
namespace lifecraft\components\attributes;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveRarity;

/**
 * @property array $config
 * @method IRepository attributes()
 * @method string getId()
 */
trait THasRarity
{
    use TAttribute;

    public function getRarity(): ?IAttribute
    {
        return $this->getAttrByOwner(IHaveRarity::FIELD__RARITY);
    }

    public function setRarity(IAttribute $attribute): IHaveRarity
    {
        return $this->attachAttribute($attribute);
    }

    public function getRarityValue(): int
    {
        return $this->config[IHaveRarity::FIELD__RARITY];
    }

    public function setRarityValue(int $value): IHaveRarity
    {
        return $this->setAttributeValue($this->getRarity(), $value, IHaveRarity::FIELD__RARITY);
    }
}
