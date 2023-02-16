<?php

namespace BuilderPattern\App\Builders;

use BuilderPattern\App\Builders\Builder;

use BuilderPattern\App\Sandwich\Sandwich;
use BuilderPattern\App\Sandwich\TunaSandwich;

use BuilderPattern\App\Sandwich\Components\Bread\WheatBread;
use BuilderPattern\App\Sandwich\Components\Filling\Tuna;
use BuilderPattern\App\Sandwich\Components\Spread\Mayo;
use BuilderPattern\App\Sandwich\Components\Garnish\Cilantro;

class TunaSandwichBuilder implements Builder 
{

    private $sandwich;


    public function createSandwich()
    {
        $this->sandwich = new TunaSandwich;
    }


    public function addBread()
    {
        $this->sandwich->setComponent('bread', new WheatBread);
    }


    public function addSpread()
    {
        $this->sandwich->setComponent('spread', new Mayo);
    }


    public function addFilling()
    {
        $this->sandwich->setComponent('filling', new Tuna);
    }


    public function addGarnish()
    {
        $this->sandwich->setComponent('garnish', new Cilantro);
    }


    public function getSandwich() : Sandwich
    {
        $result = $this->sandwich;
        return $result;
    }

}