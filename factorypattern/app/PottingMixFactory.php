<?php 

namespace FactoryPattern\App;

class PottingMixFactory 
{
    public static function create()
    {
        $garden_soil = new GardenSoil(40);
        $crh = new CarbonizedRiceHull(30);
        $vermicast = new Vermicast(30);

        return new PottingMix($garden_soil, $crh, $vermicast);
    }

}