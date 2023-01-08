<?php 

namespace DecoratorPattern\App\Decorators;

use DecoratorPattern\App\Product;

class CustomBearing extends YoyoDecorator 
{
    const BEARING_PRICE = 2.50;

    public function getPrice(): float
    {
        return $this->product->getPrice() + self::BEARING_PRICE;
    }
}