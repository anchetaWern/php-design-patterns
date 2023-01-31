<?php 

namespace BridgePattern\App\Implementations\LensPriority;

use BridgePattern\App\Implementations\LensPriority\LensPriority;

class AperturePriority implements LensPriority
{

    public function getPriority() : string 
    {
        return 'aperture';
    }

}