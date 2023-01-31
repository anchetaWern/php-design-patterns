<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function test_bridge() : void
    {
        $dslr = new BridgePattern\App\DSLRCamera();
        $dslr->setLensType(new BridgePattern\App\Implementations\LensType\Macro);
        $dslr->setLensPriority(new BridgePattern\App\Implementations\LensPriority\AperturePriority);

        $this->assertEquals([
            'camera' => 'dslr',
            'type' => 'macro',
            'priority' => 'aperture',
        ], $dslr->takePicture());


        $mirrorless = new BridgePattern\App\MirrorlessCamera();
        $mirrorless->setLensType(new BridgePattern\App\Implementations\LensType\Telephoto);
        $mirrorless->setLensPriority(new BridgePattern\App\Implementations\LensPriority\ShutterPriority);
        
        $this->assertEquals([
            'camera' => 'mirrorless',
            'type' => 'telephoto',
            'priority' => 'shutter',
        ], $mirrorless->takePicture());
       
    }
}