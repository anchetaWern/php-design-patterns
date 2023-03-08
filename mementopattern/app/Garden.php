<?php 

namespace MementoPattern\App;

use MementoPattern\App\GardenMemento;
use MementoPattern\App\Memento;

class Garden
{   

    public function __construct(private string $status, private array $plants, private array $installations)
    {

    }


    public function getStatus() : string 
    {
        return $this->status;
    }


    public function getPlants() : array 
    {
        return $this->plants;
    }


    public function getInstallations() : array 
    {
        return $this->installations;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }


    public function setPlants($plants)
    {
        $this->plants = $plants;
    }


    public function setInstallations($installs)
    {
        $this->installations = $installs; 
    }


    public function save($id) : Memento
    {   
        $state = [
            'status' => $this->status, 
            'plants' => $this->plants, 
            'installations' => $this->installations,
        ];
        return new GardenMemento($id, json_encode($state));
    }


    public function restore(Memento $memento) : void
    {
        $gardenState = json_decode($memento->getState(), true);

        $this->status = $gardenState['status'];
        $this->plants = $gardenState['plants'];
        $this->installations = $gardenState['installations'];
    }
    

}