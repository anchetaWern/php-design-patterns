<?php 

namespace TemplateMethodPattern\App;

class FruitySmoothie extends Smoothie
{

    public function addMainFlavor()
    {
        $this->ingredients[] = 'fruit';
        return $this;
    }

}