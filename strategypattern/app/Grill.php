<?php 

namespace StrategyPattern\App;

class Grill implements CookingMethod
{
    public function cook($food): string 
    {
        return 'grilling ' . $food;
    }
}