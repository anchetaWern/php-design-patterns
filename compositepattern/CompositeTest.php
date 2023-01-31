<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function test_composite() : void
    {
        
        $main_menu = new \CompositePattern\App\Menu('Main');

        $herbs_menu = new \CompositePattern\App\Menu('Herbs');
       
        $herbs_menu->add(new \CompositePattern\App\Link('/rosemary', 'Rosemary'));
        $herbs_menu->add(new \CompositePattern\App\Link('/vietnamese-coriander', 'Vietnamese Coriander'));
        $herbs_menu->add(new \CompositePattern\App\Link('/tarragon', 'Tarragon'));

        
        $leafygreens_menu = new \CompositePattern\App\Menu('Leafy Greens');

        $leafygreens_menu->add(new \CompositePattern\App\Link('/bokchoi', 'Bokchoi'));
        $leafygreens_menu->add(new \CompositePattern\App\Link('/arugula', 'Arugula'));
        $leafygreens_menu->add(new \CompositePattern\App\Link('/pechay', 'Pechay'));
        $leafygreens_menu->add(new \CompositePattern\App\Link('/lettuce', 'Lettuce'));

        $main_menu->add($herbs_menu);
        $main_menu->add($leafygreens_menu);

       
        $this->assertEquals($main_menu->render(), [
            
            'title' => 'Main',
            'items' => [
                [
                    'title' => 'Herbs',
                    'items' => [
                        [
                            'link' => '/rosemary',
                            'text' => 'Rosemary',
                        ],
                        [
                            'link' => '/vietnamese-coriander',
                            'text' => 'Vietnamese Coriander',
                        ],
                        [
                            'link' => '/tarragon',
                            'text' => 'Tarragon',
                        ],
                    ]
                ],
                [
                    'title' => 'Leafy Greens',
                    'items' => [
                        [
                            'link' => '/bokchoi',
                            'text' => 'Bokchoi',
                        ],
                        [
                            'link' => '/arugula',
                            'text' => 'Arugula',
                        ],
                        [
                            'link' => '/pechay',
                            'text' => 'Pechay',
                        ],
                        [
                            'link' => '/lettuce',
                            'text' => 'Lettuce',
                        ],
                    ]
                ]
            ]
        ]);
       
    }
}