<?php 

namespace ObserverPattern\App;

use ObserverPattern\App\Store;

class Client 
{

    public function buyFrom(Store $store, string $item)
    {
        $store->sellItem($item);
    }

}