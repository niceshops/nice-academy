<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;


class ProductComparator
{
    /**
     * @var Product
     */
    private Product $product;

    /**
     * ProductComparator constructor.
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * Checks if passed product is the same instance
     *
     * @param Product $product
     *
     * @return bool
     */
    public function isSame(Product $product): bool
    {
        return $this->getProduct() === $product;
    }
}