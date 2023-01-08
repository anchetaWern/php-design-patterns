<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function test_yoyo_price() : void
    {
        $yoyo = new DecoratorPattern\App\Yoyo();
        $this->assertEquals($yoyo->getPrice(), 10.99);

        $yoyo_with_custom_bearing = new DecoratorPattern\App\Decorators\CustomBearing($yoyo);
        $this->assertEquals($yoyo_with_custom_bearing->getPrice(), 13.49);

        $yoyo_with_transparent_cap = new DecoratorPattern\App\Decorators\TransparentCap($yoyo);
        $this->assertEquals($yoyo_with_transparent_cap->getPrice(), 12.24);

        $yoyo_with_custom_bearing_and_transparent_cap = new DecoratorPattern\App\Decorators\TransparentCap(new DecoratorPattern\App\Decorators\CustomBearing($yoyo));
        $this->assertEquals($yoyo_with_custom_bearing_and_transparent_cap->getPrice(), 14.74);

        $yoyo_with_custom_bearing_and_custom_spacers = new DecoratorPattern\App\Decorators\CustomSpacers(new DecoratorPattern\App\Decorators\CustomBearing($yoyo));
        $this->assertEquals($yoyo_with_custom_bearing_and_custom_spacers->getPrice(), 18.59);

        $yoyo_with_custom_bearing_and_custom_spacers_and_transparent_cap = new DecoratorPattern\App\Decorators\TransparentCap(new DecoratorPattern\App\Decorators\CustomSpacers(new DecoratorPattern\App\Decorators\CustomBearing($yoyo)));
        $this->assertEquals($yoyo_with_custom_bearing_and_custom_spacers_and_transparent_cap->getPrice(), 19.84);
    }
}