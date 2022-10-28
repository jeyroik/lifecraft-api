<?php
namespace lifecraft\interfaces\prices;

interface IHavePrice
{
    public const FIELD__PRICE_ID = 'price_id';

    public function getPriceId(): string;
    public function setPriceId(string $id): IHavePrice;

    public function getPrice(): IPrice;
    public function setPrice(IPrice $price): IHavePrice;
}
