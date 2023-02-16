<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use BuilderPattern\App\Director;
use BuilderPattern\App\Builders\TunaSandwichBuilder;

use BuilderPattern\App\Sandwich\TunaSandwich;

use BuilderPattern\App\Sandwich\Components\Bread\WheatBread;
use BuilderPattern\App\Sandwich\Components\Spread\Mayo;
use BuilderPattern\App\Sandwich\Components\Filling\Tuna;
use BuilderPattern\App\Sandwich\Components\Garnish\Cilantro;

class BuilderTest extends TestCase
{
    public function test_non_builder() : void 
    {
        $tuna_sandwich = new TunaSandwich;
        $tuna_sandwich->setComponent('bread', new WheatBread);
        $tuna_sandwich->setComponent('spread', new Mayo);
        $tuna_sandwich->setComponent('filling', new Tuna);
        $tuna_sandwich->setComponent('garnish', new Cilantro);

        $this->assertInstanceOf(WheatBread::class, $tuna_sandwich->getComponent('bread'));
        $this->assertInstanceOf(Mayo::class, $tuna_sandwich->getComponent('spread'));
        $this->assertInstanceOf(Tuna::class, $tuna_sandwich->getComponent('filling'));
        $this->assertInstanceOf(Cilantro::class, $tuna_sandwich->getComponent('garnish'));
    }


    public function test_builder() : void
    {
        $director = new Director;
        $tuna_sandwich = $director->build(new TunaSandwichBuilder);

        $this->assertInstanceOf(WheatBread::class, $tuna_sandwich->getComponent('bread'));
        $this->assertInstanceOf(Mayo::class, $tuna_sandwich->getComponent('spread'));
        $this->assertInstanceOf(Tuna::class, $tuna_sandwich->getComponent('filling'));
        $this->assertInstanceOf(Cilantro::class, $tuna_sandwich->getComponent('garnish'));

    }



}