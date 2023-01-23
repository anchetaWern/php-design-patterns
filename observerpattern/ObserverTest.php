<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function test_observer() : void
    {
        $client = new ObserverPattern\App\Client;

        $store = new ObserverPattern\App\Store;

        $inventory = new ObserverPattern\App\Observers\Inventory;
        $mailer = new ObserverPattern\App\Observers\Mailer;

        $this->assertEquals($inventory->getItems(), [
            'star apple',
            'sugar apple',
            'meyer lemon',
            'mango',
            'java plum',
            'spanish plum',
        ]);

        $this->assertEquals($mailer->getSentMail(), []);

        $store->attach($inventory);
        $store->attach($mailer);
        $client->buyFrom($store, 'mango');

        $this->assertEquals($inventory->getItems(), [
            'star apple',
            'sugar apple',
            'meyer lemon',
            'java plum',
            'spanish plum',
        ]);

        $this->assertEquals($mailer->getSentMail(), ['mango']);
        
    }
}