<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function test_cooking_methods() : void
    {
        $person = new StrategyPattern\App\Person();
    
        $this->assertEquals($person->makeDinner('fish', new StrategyPattern\App\Fry), 'frying fish');
        $this->assertEquals($person->makeDinner('fish', new StrategyPattern\App\Boil), 'boiling fish');
        $this->assertEquals($person->makeDinner('fish', new StrategyPattern\App\Roast), 'roasting fish');

        $this->assertEquals($person->makeDinner('fish', new StrategyPattern\App\Grill), 'grilling fish');
    }
}