<?php 

namespace DecoratorPattern\App\Decorators;

use DecoratorPattern\App\Product;

class CustomSpacers extends YoyoDecorator 
{
    const SPACER_PRICE = 5.10;

    public function getPrice(): float
    {
        return $this->product->getPrice() + self::SPACER_PRICE;
    }
}