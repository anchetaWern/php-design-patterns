<?php 

namespace VisitorPattern\App;

use VisitorPattern\App\FormComponent;
use VisitorPattern\App\Visitor;


class Fieldset implements FormComponent
{

    
    public function __construct(private string $id, private array $inputFields) 
    {

    }


    public function getId() : string
    {
        return $this->id;
    }


    public function getInputFields() : array 
    {
        return $this->inputFields;
    }


    public function accept(Visitor $visitor) : string
    {
        return $visitor->visitFieldset($this);
    }



}