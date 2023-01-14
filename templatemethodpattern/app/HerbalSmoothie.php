<?php 

namespace TemplateMethodPattern\App;

class HerbalSmoothie extends Smoothie
{

    public function addMainFlavor()
    {
        $this->ingredients[] = 'herbs';
        return $this;
    }


}