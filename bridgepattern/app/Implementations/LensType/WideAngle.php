<?php 

namespace BridgePattern\App\Implementations\LensType;

use BridgePattern\App\Implementations\LensType\LensType;

class WideAngle implements LensType 
{
    public function getType() : string
    {
        return 'wide_angle';
    }

}