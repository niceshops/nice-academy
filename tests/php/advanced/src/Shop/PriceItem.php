<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;


class PriceItem
{
    /**
     * @var float
     */
    public $price = 0.0;
    
    
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
    public function addPrice_by_Value(float $price)
    {
        $this->price += $price;
        
        return $this;
    }
    
    
    /**
     * @param PriceItem $priceItem
     *
     * @return $this
     */
    public function addPrice(PriceItem $priceItem)
    {
        $this->price += $priceItem->price;
        
        return $this;
    }
}