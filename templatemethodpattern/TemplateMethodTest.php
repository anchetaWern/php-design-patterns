<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function test_smoothie() : void
    {   
        $herbalSmoothie = new TemplateMethodPattern\App\HerbalSmoothie();
        $this->assertEquals($herbalSmoothie->blend(), [
            'water',
            'herbs',
            'milk',
            'seeds',
        ]);


        $fruitySmoothie = new TemplateMethodPattern\App\FruitySmoothie();
        $this->assertEquals($fruitySmoothie->blend(), [
            'water',
            'fruit',
            'milk',
            'seeds',
        ]);


        $veggieSmoothie = new TemplateMethodPattern\App\VeggieSmoothie();
        $this->assertEquals($veggieSmoothie->blend(), [
            'water',
            'veggies',
            'milk',
            'seeds',
        ]);
    }
}