<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * @var Product|MockObject
     */
    protected $object;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = $this->getMockBuilder(Product::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    /**
     * @group  integration
     * @small
     */
    public function testTestClassExists(): void
    {
        $this->assertTrue(class_exists(Product::class));
        $this->assertTrue($this->object instanceof Product);
    }
}
