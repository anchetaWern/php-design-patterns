<?php 

namespace BridgePattern\App;

use BridgePattern\App\Camera;

class MirrorLessCamera extends Camera {

    public function takePicture() : array
    {
        return [
            'camera' => 'mirrorless',
            'priority' => $this->lens_priority->getPriority(),
            'type' => $this->lens_type->getType(),
        ];
    }

}