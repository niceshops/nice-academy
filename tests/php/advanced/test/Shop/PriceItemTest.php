<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;

use Generator;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class PriceItemTest extends TestCase
{
    
    /**
     * @var PriceItem|MockObject
     */
    protected $object;
    
    
    protected function setUp()
    {
        $this->object = $this->getMockBuilder(PriceItem::class)->disableOriginalConstructor()->getMockForAbstractClass();
    }
    
    
    /**
     * @group  integration
     * @small
     */
    public function testTestClassExists()
    {
        $this->assertTrue(class_exists(PriceItem::class));
        $this->assertTrue($this->object instanceof PriceItem);
    }
    
    
    /**
     * @group  unit
     * @small
     *
     * @covers \NiceshopsDev\NiceAcademy\Tests\Advanced\Shop\PriceItem::addPrice_by_Value
     */
    public function testAddPrice_by_Value()
    {
        /**
         * @var PriceItem|MockObject $priceItem
         */
        $priceItem = $this->getMockBuilder(PriceItem::class)->disableOriginalConstructor()->getMockForAbstractClass();
        $this->assertSame(0.0, $priceItem->price);
        
        $priceItem->addPrice_by_Value(10.0);
        $this->assertSame(10.0, $priceItem->price);
        
        $priceItem->addPrice_by_Value(-4.5);
        $this->assertSame(5.5, $priceItem->price);
    }
    
    /**
     * @return Generator
     */
    public function addPriceDataProvider()
    {
        yield [[], 0];
        yield [[10, -5], 5];
        yield [[10, -5, -20, 3.5], -11.5];
    }
    
    
    /**
     * @group        unit
     * @small
     *
     * @dataProvider addPriceDataProvider
     *
     * @covers       \NiceshopsDev\NiceAcademy\Tests\Advanced\Shop\PriceItem::addPrice
     *
     * @param array $arrPrice
     * @param float $expectedPrice
     */
    public function testAddPrice(array $arrPrice, float $expectedPrice)
    {
        /**
         * @var PriceItem|MockObject $priceItem
         */
        $priceItem = $this->getMockBuilder(PriceItem::class)->disableOriginalConstructor()->getMockForAbstractClass();
        
        foreach ($arrPrice as $price) {
            $priceItem->addPrice(new PriceItem($price));
        }
        
        $this->assertSame($expectedPrice, $priceItem->price);
    }
}
