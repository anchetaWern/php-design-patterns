<?php 

namespace StrategyPattern\App;

class Person
{
    public function makeDinner(string $food, CookingMethod $cookingMethod)
    {
        return $cookingMethod->cook($food);
    }
}