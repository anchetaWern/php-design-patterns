<?php 

namespace BridgePattern\App\Implementations\LensPriority;

use BridgePattern\App\Implementations\LensPriority\LensPriority;

class ShutterPriority implements LensPriority
{

    public function getPriority() : string 
    {
        return 'shutter';
    }

}