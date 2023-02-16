<?php

namespace BuilderPattern\App\Sandwich;

use BuilderPattern\App\Sandwich\Components\Component;

abstract class Sandwich {
  
    private array $data = [];

  
    public function setComponent($key, Component $component) 
    {
        $this->data[$key] = $component;
    }

    public function getComponent($key)
    {
        return $this->data[$key];
    }
}