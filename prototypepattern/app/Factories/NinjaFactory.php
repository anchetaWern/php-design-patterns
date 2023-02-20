<?php 

namespace PrototypePattern\App\Factories;

use PrototypePattern\App\NinjaInterface;

class NinjaFactory
{

    public function __construct(private NinjaInterface $ninja)
    {
        
    }

    public function emptySlateNinja()
    {
        $ninja = clone $this->ninja; 
        $ninja->setChakra(0);
        $ninja->setTechniques([]);
        return $ninja;
    }


    public function ninjaWithChakra()
    {
        $ninja = clone $this->ninja;
        $ninja->setTechniques([]);
        return $ninja;
    }


    public function ninjaWithChakraAndTechniques()
    {
        return clone $this->ninja;
    }

}