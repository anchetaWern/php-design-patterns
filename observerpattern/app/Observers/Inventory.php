<?php 

namespace ObserverPattern\App\Observers;

use SplObserver;
use SplSubject;

class Inventory implements SplObserver
{
    private $items = [
        'star apple',
        'sugar apple',
        'meyer lemon',
        'mango',
        'java plum',
        'spanish plum',
    ];

    public function update(SplSubject $subject): void
    {
        $key = array_search($subject->getItem(), $this->items);
        if ($key !== false) {
            unset($this->items[$key]);
            $this->items = array_values($this->items);
        }
    }


    public function getItems()
    {
        return $this->items;
    }

}
