<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use ProxyPattern\App\Gardener;
use ProxyPattern\App\GardenerProxy;

class ProxyTest extends TestCase
{
    public function test_proxy() : void 
    {
        
        $gardener = new Gardener;
        $gardenerResult = $gardener->waterPlants();
        $this->assertEquals($gardenerResult, 'water');
        $this->assertEquals($gardener->getBeforeActions(), []);

        $gardenerProxy = new GardenerProxy($gardener);
        $gardenerProxyResult = $gardenerProxy->waterPlants();
        $this->assertEquals($gardenerProxyResult, 'water');
        $this->assertEquals($gardenerProxy->getBeforeActions(), ['addOrganicMatter', 'addMulch']);

    }





}