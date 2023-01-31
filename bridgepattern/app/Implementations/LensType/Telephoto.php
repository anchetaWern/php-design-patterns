<?php 

namespace BridgePattern\App\Implementations\LensType;

use BridgePattern\App\Implementations\LensType\LensType;

class Telephoto implements LensType 
{
    public function getType() : string
    {
        return 'telephoto';
    }

}