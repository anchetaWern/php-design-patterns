<?php 

namespace ProxyPattern\App;

use ProxyPattern\App\GardenerInterface;
use ProxyPattern\App\Gardener;

class GardenerProxy implements GardenerInterface
{

    private $gardener;

    public function __construct(Gardener $gardener)
    {
        $this->gardener = $gardener;
    }


    public function waterPlants() 
    {
        $before_actions[] = $this->checkPlantType();
        $before_actions[] = $this->checkWeeds();
       
        $this->gardener->setBeforeActions(array_filter($before_actions));
        return $this->gardener->waterPlants();
    }


    public function getBeforeActions()
    {
        return $this->gardener->getBeforeActions();
    }


    private function checkPlantType()
    {
        if ($this->checkSoilPh() === 'alkaline') {
            return 'addOrganicMatter';
        }
    }


    private function checkWeeds()
    {
        if ($this->hasWeeds()) {
            return 'addMulch';
        }
    }


    private function hasWeeds()
    {
        return true;
    }


    private function checkSoilPh()
    {
        return 'alkaline';
    }
    
}