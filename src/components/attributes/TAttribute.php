<?php
namespace lifecraft\components\attributes;

use extas\components\exceptions\MissedOrUnknown;
use extas\interfaces\IHasId;
use lifecraft\components\exceptions\attributes\AttributeCanNotBeChanged;
use lifecraft\interfaces\attributes\IAttribute;

/**
 * @method IRepository attributes()
 * @method string getId()
 */
trait TAttribute
{
    protected function getAttrByOwner(string $attrName): ?IAttribute
    {
        return $this->attributes()->one([
            IAttribute::FIELD__OWNER_ID => $this->getId(),
            IAttribute::FIELD__NAME => $attrName
        ]);
    }

    protected function attachAttribute(IAttribute $attribute)
    {
        if ($this instanceof IHasId) {
            $attribute->setOwner($this);
            /**
             * @var IAttribute $attribute
             */
            $attribute = $this->attributes()->create($attribute);
            $this->config[$attribute->getName()] = $attribute->getValue();
        } else {
            throw new \Exception(IHasId::class . ' instance is required');
        }

        return $this;
    }

    protected function incAttribute(?IAttribute $attr, int $increment)
    {
        if ($attr && $attr->canInc($increment)) {
            $attr->inc($increment);
            $this->updateAttributeValue($attr);
        } else {
            throw new AttributeCanNotBeChanged($attr, AttributeCanNotBeChanged::CHANGE__INC);
        }

        return $attr->getValue();
    }

    protected function decAttribute(?IAttribute $attr, int $decrement)
    {
        if ($attr && $attr->canDec($decrement)) {
            $attr->dec($decrement);
            $this->updateAttributeValue($attr);
        } elseif(!$attr) {
            throw new MissedOrUnknown('attribute');
        } else {
            throw new AttributeCanNotBeChanged($attr, AttributeCanNotBeChanged::CHANGE__DEC);
        }

        return $attr->getValue();
    }

    protected function setAttributeValue(?IAttribute $attr, int $value, string $attributeName)
    {
        if ($attr) {
            $attr->setValue($value);
            $this->updateAttributeValue($attr);

            return $this;
        }

        throw new MissedOrUnknown($attributeName);
    }

    protected function updateAttributeValue(IAttribute $attr): void
    {
        $this->attributes()->update($attr);
        $this->config[$attr->getName()] = $attr->getValue();
    }
}
