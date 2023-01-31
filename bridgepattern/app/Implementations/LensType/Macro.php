<?php 

namespace BridgePattern\App\Implementations\LensType;

use BridgePattern\App\Implementations\LensType\LensType;

class Macro implements LensType 
{
    public function getType() : string
    {
        return 'macro';
    }

}