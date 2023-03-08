<?php 

namespace VisitorPattern\App;

use VisitorPattern\App\Visitor;


interface FormComponent {
    
    public function accept(Visitor $visitor) : string;
}