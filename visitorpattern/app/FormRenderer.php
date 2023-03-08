<?php 

namespace VisitorPattern\App;

use VisitorPattern\App\Visitor;
use VisitorPattern\App\Form;
use VisitorPattern\App\Fieldset;
use VisitorPattern\App\InputField;


class FormRenderer implements Visitor
{

    public function visitForm(Form $form) : string
    {
        $html = '';
        foreach ($form->getFieldsets() as $fieldset)
        {   
            $html .= $this->visitFieldset($fieldset);
        }

        return $html;
    }


    public function visitFieldset(Fieldset $fieldset) : string
    {
        $html = '<fieldset id="' . $fieldset->getId() . '">';
        foreach ($fieldset->getInputFields() as $field)
        {
            $html .= $this->visitInputField($field);
        }
        $html .= "</fieldset>";

        return $html;
    }


    public function visitInputField(InputField $inputField) : string
    {
        if ($inputField->getType() === 'textarea')
        {
            return '<textarea name="' . $inputField->getId() . '"></textarea>';
        }

        return '<input type="' . $inputField->getType() . '" name="' . $inputField->getId() . '" />';
    }

}