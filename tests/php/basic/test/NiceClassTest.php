<?php

namespace NiceshopsDev\NiceAcademy\Tests\Basic;


use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class NiceClassTest extends TestCase
{
    
    
    /**
     * @var NiceClass|MockObject
     */
    protected $object;
    
    
    protected function setUp()
    {
        $this->object = $this->getMockBuilder(NiceClass::class)->disableOriginalConstructor()->getMockForAbstractClass();
    }
    
    
    /**
     * @group  integration
     * @small
     */
    public function testTestClassExists()
    {
        $this->assertTrue(class_exists(NiceClass::class));
        $this->assertTrue($this->object instanceof NiceClass);
    }
}
