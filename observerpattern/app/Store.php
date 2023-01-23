<?php 

namespace ObserverPattern\App;

use SplSubject;
use SplObjectStorage;
use SplObserver;

class Store implements SplSubject
{

    private $observers;
    private $item;

    public function __construct()
    {
        $this->observers = new SplObjectStorage(); 
    }


    public function sellItem(string $item)
    {
        $this->item = $item;
        $this->notify();
    }


    public function getItem()
    {
        return $this->item;
    }


    public function attach(SplObserver $observer): void
    {   
        $this->observers->attach($observer);
    }
    

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            $this->observers[$key];
        }
    }

    
    public function notify(): void
    {
        if ($this->observers->count() > 0)
        {
            foreach ($this->observers as $value)
            {
                $value->update($this);
            }
        }
    }
}