<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;


class Product
{
    /**
     * @var string
     */
    private string $number;

    /**
     * @var string
     */
    private string $title;


    private $price;


    /**
     * Product constructor.
     *
     * @param string $number
     * @param string $title
     * @param        $price
     */
    public function __construct(string $number, string $title, $price)
    {
        $this->number = $number;
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function hasSameNumber(Product $product): bool
    {
        return $this->getNumber() === $product->getNumber();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "#" . $this->getNumber() . " " . $this->getTitle();
    }
}