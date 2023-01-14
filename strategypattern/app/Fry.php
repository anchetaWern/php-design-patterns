<?php 

namespace StrategyPattern\App;

class Fry implements CookingMethod
{
    public function cook($food): string 
    {
        return 'frying ' . $food;
    }
}