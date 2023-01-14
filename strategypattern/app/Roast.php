<?php 

namespace StrategyPattern\App;

class Roast implements CookingMethod
{
    public function cook($food): string 
    {
        return 'roasting ' . $food;
    }
}