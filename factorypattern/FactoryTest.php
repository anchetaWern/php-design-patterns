<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function test_nonfactory() : void
    {
        $garden_soil = new FactoryPattern\App\GardenSoil(40);
        $crh = new FactoryPattern\App\CarbonizedRiceHull(30);
        $vermicast = new FactoryPattern\App\Vermicast(30);

        $potting_mix = new FactoryPattern\App\PottingMix($garden_soil, $crh, $vermicast);

        $this->assertEquals($potting_mix->getTotal(), 100);
    }


    public function test_factory() : void
    {
        $potting_mix = FactoryPattern\App\PottingMixFactory::create();

        $this->assertEquals($potting_mix->getTotal(), 100);
    }

}