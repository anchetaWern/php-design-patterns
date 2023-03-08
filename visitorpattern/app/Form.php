<?php 

namespace VisitorPattern\App;

use VisitorPattern\App\FormComponent;
use VisitorPattern\App\Visitor;


class Form implements FormComponent
{

    
    public function __construct(private string $id, private array $fieldsets) 
    {

    }


    public function getId() : string
    {
        return $this->id;
    }


    public function getFieldsets() : array 
    {
        return $this->fieldsets;
    }


    public function accept(Visitor $visitor) : string
    {
        return $visitor->visitForm($this);
    }



}