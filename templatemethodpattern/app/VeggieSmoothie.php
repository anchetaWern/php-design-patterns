<?php 

namespace TemplateMethodPattern\App;

class VeggieSmoothie extends Smoothie
{

    public function addMainFlavor()
    {
        $this->ingredients[] = 'veggies';
        return $this;
    }

}