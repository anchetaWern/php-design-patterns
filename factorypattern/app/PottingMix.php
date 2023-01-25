<?php 

namespace FactoryPattern\App;

use FactoryPattern\App\GrowingMedium;

class PottingMix 
{

    public function __construct(public GrowingMedium $medium_one, public GrowingMedium $medium_two, public GrowingMedium $medium_three)
    {

    }

    public function getTotal() : int
    {
        return array_sum([$this->medium_one->ratio, $this->medium_two->ratio, $this->medium_three->ratio]);
    }

}