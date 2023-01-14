<?php 

namespace StrategyPattern\App;

class Boil implements CookingMethod
{
    public function cook($food): string 
    {
        return 'boiling ' . $food;
    }
}