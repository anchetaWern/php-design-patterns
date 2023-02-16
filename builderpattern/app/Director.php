<?php 

namespace BuilderPattern\App;

use BuilderPattern\App\Sandwich\Sandwich;
use BuilderPattern\App\Builders\Builder;

class Director 
{
    public function build(Builder $builder): Sandwich 
    {
        $builder->createSandwich();
        $builder->addBread();
        $builder->addSpread();
        $builder->addFilling();
        $builder->addGarnish();

        return $builder->getSandwich();
    }
}