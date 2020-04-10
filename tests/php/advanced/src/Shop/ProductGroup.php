<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;


class ProductGroup
{
    /**
     * @var Product[]
     */
    private $arrProduct = [];
    
    
    /**
     * @param Product $product
     *
     * @return ProductGroup
     */
    public function addProduct(Product $product): self
    {
        $this->arrProduct[] = $product;
        
        return $this;
    }
    
    
    /**
     * @param Product $product
     *
     * @return $this
     */
    public function removeProduct(Product $product): self
    {
        foreach ($this->getProduct_List() as $index => $productInList) {
            $productComparator = new ProductComparator($productInList);
            if ($productComparator->isSame($product)) {
                unset($this->arrProduct[$index]);
                break;
            }
        }
        
        return $this;
    }
    
    
    /**
     * @param Product $product
     *
     * @return int
     */
    public function getProductCount(Product $product): int
    {
        $count = 0;
        foreach ($this->getProduct_List() as $productInList) {
            if ($productInList === $product) {
                ++$count;
            }
        }
        
        return $count;
    }
    
    
    /**
     * @return int
     */
    public function getCount(): int
    {
        return count($this->getProduct_List());
    }
    
    
    /**
     * Remove $maxCount amount of products with the passed product number.
     *
     * @param string   $number
     * @param int|null $maxCount NULL means no limit (all products with defined number)
     *
     * @todo implement method
     * @return array    list of removed products
     */
    public function removeProducts_with_Number(string $number, int $maxCount = null)
    {
        return [];
    }
    
    
    /**
     * @return Product[]
     */
    public function getProduct_List(): array
    {
        return $this->arrProduct;
    }
}