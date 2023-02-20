<?php 

namespace PrototypePattern\App;

use PrototypePattern\App\NinjaInterface;

class Ninja implements NinjaInterface
{

    public function __construct(public string $name, public int $chakra, public array $techniques)
    {

    }


    public function setChakra(int $chakra)
    {
        $this->chakra = $chakra;
    }


    public function setTechniques(array $techniques)
    {
        $this->techniques = $techniques;
    }


    public function __clone()
    {
        $this->name = "Copy of " . $this->name;
    }

}