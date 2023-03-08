<?php 

namespace VisitorPattern\App;

use VisitorPattern\App\FormComponent;
use VisitorPattern\App\Visitor;


class InputField implements FormComponent
{

    
    public function __construct(private string $id, private string $type) 
    {

    }


    public function getId() : string
    {
        return $this->id;
    }


    public function getType() : string 
    {
        return $this->type;
    }


    public function accept(Visitor $visitor) : string
    {
        return $visitor->visitInputField($this);
    }



}