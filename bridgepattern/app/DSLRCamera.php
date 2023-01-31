<?php 

namespace BridgePattern\App;

use BridgePattern\App\Camera;

class DSLRCamera extends Camera {

    public function takePicture() : array
    {
        return [
            'camera' => 'dslr',
            'priority' => $this->lens_priority->getPriority(),
            'type' => $this->lens_type->getType(),
        ];
    }

}