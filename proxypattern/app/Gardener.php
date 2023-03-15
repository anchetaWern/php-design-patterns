<?php 

namespace ProxyPattern\App;

use ProxyPattern\App\GardenerInterface;

class Gardener implements GardenerInterface
{
    private $before_actions = [];

    public function waterPlants()
    {
        if (!empty($this->before_actions)) {
            foreach ($this->before_actions as $action) {
                $this->$action();
            }
        }

        if ($this->isSoilDry()) {
            return 'water';
        }

        return 'dont water';
    }


    public function setBeforeActions($actions)
    {
        $this->before_actions = $actions;
    }

    
    public function getBeforeActions()
    {
        return $this->before_actions;
    }


    private function isSoilDry()
    {
        return true;
    }


    private function addOrganicMatter()
    {

    }


    private function addMulch()
    {
        
    }


}