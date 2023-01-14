<?php 

namespace StrategyPattern\App;

interface CookingMethod
{
    public function cook(string $food): string;
}