<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Basic;


class NiceClass
{
    
    
    /**
     * @return string
     */
    public function getString(): string
    {
        return "be ";
    }
    
    
    /**
     * @return string
     */
    public function result(): string
    {
        return trim($this->getString()) . " nice";
    }
}