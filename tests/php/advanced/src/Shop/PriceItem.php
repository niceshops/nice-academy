<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;


class PriceItem
{
    /**
     * @var float
     */
    public float $price = 0.0;

    /**
     * PriceItem constructor.
     *
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function addPrice_by_Value(float $price): self
    {
        $this->price += $price;

        return $this;
    }

    /**
     * @param PriceItem $priceItem
     *
     * @return $this
     */
    public function addPrice(PriceItem $priceItem): self
    {
        $this->price += $priceItem->price;

        return $this;
    }
}