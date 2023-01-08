<?php 

namespace DecoratorPattern\App\Decorators;

use DecoratorPattern\App\Product;

abstract class YoyoDecorator implements Product
{
    public function __construct(public Product $product) {}

    public function getPrice(): float
    {
        return $this->product->getPrice();
    }
}