<?php 

namespace MementoPattern\App;

use MementoPattern\App\Memento;
use MementoPattern\App\GardenMemento;

class CareTaker
{
  
    public function __construct(private $originator)
    {
        
    }


    public function backup($id) : void
    {
        $memento = $this->originator->save($id);
       
        $fp = fopen($memento->getId() . '.txt', 'w+');
        fwrite($fp, $memento->getState());
        fclose($fp);
    }


    public function restore($id) : void
    {
        $fp = fopen($id . '.txt', 'r');
        $size = filesize($id . '.txt');
        $json = fread($fp, $size);
        fclose($fp);

        $memento = new GardenMemento($id, $json);
        $this->originator->restore($memento);
    }

}