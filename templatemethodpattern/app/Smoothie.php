<?php 

namespace TemplateMethodPattern\App;

abstract class Smoothie 
{
    protected array $ingredients = [];

    public function blend(): array
    {
        $this
            ->addWater()
            ->addMainFlavor() // add this
            ->addMilk()
            ->addSeeds();
        
        return $this->ingredients;
    }

    abstract protected function addMainFlavor();

    protected function addWater()
    {
        $this->ingredients[] = 'water';
        return $this;
    }


    protected function addMilk()
    {
        $this->ingredients[] = 'milk';
        return $this;
    }


    protected function addSeeds()
    {
        $this->ingredients[] = 'seeds';
        return $this;
    }

}