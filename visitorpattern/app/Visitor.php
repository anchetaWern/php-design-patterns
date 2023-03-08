<?php 

namespace VisitorPattern\App;

use VisitorPattern\App\Form;
use VisitorPattern\App\Fieldset;
use VisitorPattern\App\InputField;

interface Visitor 
{

    public function visitForm(Form $form) : string;

    public function visitFieldset(Fieldset $fieldset) : string;

    public function visitInputField(InputField $inputField) : string;

}