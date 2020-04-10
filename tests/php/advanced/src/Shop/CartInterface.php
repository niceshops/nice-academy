<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;


interface CartInterface
{
    
    
    /**
     * @return PriceItem
     */
    public function getGrandTotal(): PriceItem;
    
    
    /**
     * @param Product $product
     * @param int     $count
     *
     * @return $this
     */
    public function addProduct(Product $product, int $count = 1): self;
    
    
    /**
     * @param Product $product
     * @param int     $count
     *
     * @return $this
     */
    public function removeProduct(Product $product, int $count = 1): self;
}