<?php 

namespace CompositePattern\App;

class Link implements MenuInterface
{
    
    public function __construct(public string $link, public string $text)
    {

    }


    public function render() : array
    {
        return [
            'link' => $this->link,
            'text' => $this->text,
        ];
    }


}