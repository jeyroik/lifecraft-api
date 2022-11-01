<?php
namespace lifecraft\components\prices;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\prices\IHavePrice;
use lifecraft\interfaces\prices\IPrice;

/**
 * @property array $config
 * @method IRepository prices()
 */
trait THasPrice
{
    public function getPrice(): IPrice
    {
        return $this->prices()->one([
            IPrice::FIELD__ID => $this->getPriceId()
        ]);
    }

    public function setPrice(IPrice $price): IHavePrice
    {
        $price->setOwner($this);
        $price = $this->prices()->create($price);
        
        $this->setPriceId($price->getId());

        return $this;
    }

    public function getPriceId(): string
    {
        return $this->config[IHavePrice::FIELD__PRICE_ID] ?? '';
    }

    public function setPriceId(string $id): IHavePrice
    {
        $this->config[IHavePrice::FIELD__PRICE_ID] = $id;

        return $this;
    }
}
