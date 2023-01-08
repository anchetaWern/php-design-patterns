<?php 

namespace DecoratorPattern\App\Decorators;

use DecoratorPattern\App\Product;

class TransparentCap extends YoyoDecorator
{
    const TRANSPARENT_CAP_PRICE = 1.25;

    public function getPrice(): float
    {
        return $this->product->getPrice() + self::TRANSPARENT_CAP_PRICE;
    }
}