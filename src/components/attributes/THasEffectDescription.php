<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IHaveEffectDescription;

/**
 * @property array $config
 */
trait THasEffectDescription
{
    public function getEffectDescription(): string
    {
        return $this->config[IHaveEffectDescription::FIELD__EFFECT_DESCRIPTION] ?? '';
    }

    public function setEffectDescription(string $description): IHaveEffectDescription
    {
        $this->config[IHaveEffectDescription::FIELD__EFFECT_DESCRIPTION] = $description;

        return $this;
    }
}
