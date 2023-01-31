<?php 

namespace CompositePattern\App;

class Menu implements MenuInterface
{

    private array $menu_items;
 
    public function __construct(public string $title)
    {
        $this->menu_items = [];
    }   
    

    public function add(MenuInterface $link)
    {
        $this->menu_items[] = $link;
    }

    
    public function render() : array
    {
        $menu = [
            'title' => $this->title,
            'items' => [],
        ];
        foreach ($this->menu_items as $link)
        {
            $menu['items'][] = $link->render();
        }
        return $menu;
    }

}