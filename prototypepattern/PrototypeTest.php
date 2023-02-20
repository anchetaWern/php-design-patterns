<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;



class PrototypeTest extends TestCase
{
    public function test_prototype() : void 
    {
        $ninja = new PrototypePattern\App\Ninja('Naruto', 100, ['rasengan', 'kage bunshin'], false, false);
        $ninjaFactory = new PrototypePattern\App\Factories\NinjaFactory($ninja);
        
        $this->assertEquals($ninjaFactory->emptySlateNinja()->chakra, 0);
        $this->assertEquals($ninjaFactory->emptySlateNinja()->techniques, []);

        $this->assertEquals($ninjaFactory->ninjaWithChakra()->chakra, 100);
        $this->assertEquals($ninjaFactory->ninjaWithChakra()->techniques, []);

        $this->assertEquals($ninjaFactory->ninjaWithChakraAndTechniques()->chakra, 100);
        $this->assertEquals($ninjaFactory->ninjaWithChakraAndTechniques()->techniques, ['rasengan', 'kage bunshin']);
    }



}