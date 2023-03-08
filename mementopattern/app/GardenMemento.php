<?php 

namespace MementoPattern\App;

use MementoPattern\App\Memento;

class GardenMemento implements Memento 
{

    public function __construct(private string $id, private string $state)
    {
    }


    public function getId() : string
    {
        return $this->id; 
    }

    public function getState() : string
    {
        return $this->state;
    }

}