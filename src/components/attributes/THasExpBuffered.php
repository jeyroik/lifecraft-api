<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\attributes\IHaveExpBuffered;

/**
 * @property array $config
 */
trait THasExpBuffered
{
    use TAttribute;

    public function getExpBuffered(): IAttribute
    {
        return $this->getAttrByOwner(IHaveExpBuffered::FIELD__EXP_BUFFERED);   
    }

    public function setExpBuffered(IAttribute $attribute): IHaveExpBuffered
    {
        return $this->attachAttribute($attribute);
    }

    public function getExpBufferedValue(): int
    {
        return $this->config[IHaveExpBuffered::FIELD__EXP_BUFFERED] ?? 0;
    }

    public function setExpBufferedValue(int $expBuffered): IHaveExpBuffered
    {
        return $this->setAttributeValue($this->getExpBuffered(), $expBuffered, IHaveExpBuffered::FIELD__EXP_BUFFERED);
    }

    public function incExpBuffered(int $increment): int
    {
        return $this->incAttribute($this->getExpBuffered(), $increment);
    }

    public function decExpBuffered(int $decrement): int
    {
        return $this->decAttribute($this->getExpBuffered(), $decrement);
    }

    public function canIncExpBuffered(int $increment): bool
    {
        return ($b = $this->getExpBuffered()) ? $b->canInc($increment) : false;
    }

    public function canDecExpBuffered(int $decrement): bool
    {
        return ($b = $this->getExpBuffered()) ? $b->canDec($decrement) : false;
    }
}
