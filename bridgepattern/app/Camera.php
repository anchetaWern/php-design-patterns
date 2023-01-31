<?php 

namespace BridgePattern\App;

use BridgePattern\App\Implementations\LensType\LensType;
use BridgePattern\App\Implementations\LensPriority\LensPriority;

abstract class Camera
{
    protected $lens_type;
    protected $lens_priority;

    public function setLensType(LensType $type) : void
    {
        $this->lens_type = $type;
    }

    public function setLensPriority(LensPriority $priority) : void
    {
        $this->lens_priority = $priority;
    }

    abstract public function takePicture() : array;

}