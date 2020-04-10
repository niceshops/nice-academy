<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ProductGroupTest extends TestCase
{
    
    
    /**
     * @var ProductGroup|MockObject
     */
    protected $object;
    
    
    protected function setUp()
    {
        $this->object = $this->getMockBuilder(ProductGroup::class)->disableOriginalConstructor()->getMockForAbstractClass();
    }
    
    
    /**
     * @group  integration
     * @small
     */
    public function testTestClassExists()
    {
        $this->assertTrue(class_exists(ProductGroup::class));
        $this->assertTrue($this->object instanceof ProductGroup);
    }
    
    
    /**
     * @group unit
     * @small
     *
     * @covers \NiceshopsDev\NiceAcademy\Tests\Advanced\Shop\ProductGroup::getCount
     */
    public function testGetCount()
    {
        /**
         * @var ProductGroup|MockObject $productGroup
         */
        $productGroup = $this->getMockBuilder(ProductGroup::class)->disableOriginalConstructor()->setMethods(["getProduct_List"])->getMockForAbstractClass();
        
        $arrProduct_List = [
            "Foo", "Bar", "Baz",
        ];
        
        $productGroup->expects($this->once())->method("getProduct_List")->with()->willReturn($arrProduct_List);
        
        $this->assertSame(3, $productGroup->getCount());
    }
}
