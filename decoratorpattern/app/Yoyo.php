<?php 

namespace DecoratorPattern\App;

class Yoyo implements Product
{
    const PRICE = 10.99;

    public function getPrice(): float
    {
        return self::PRICE;
    }
}