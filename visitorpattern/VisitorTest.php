<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use VisitorPattern\App\Form;
use VisitorPattern\App\Fieldset;
use VisitorPattern\App\InputField;

use VisitorPattern\App\FormRenderer;

class VisitorTest extends TestCase
{

    public function test_visitor()
    {

        $businessDetailsFieldset = new Fieldset('businessDetails', [
            new InputField('name', 'text'),
            new InputField('address', 'text'),
            new InputField('about_text', 'textarea'),
        ]);

        $businessContactFieldset = new Fieldset('businessContact', [
            new InputField('contact', 'text'),
            new InputField('email', 'email'),
            new InputField('phone_number', 'number'),
        ]);

        $businessSignupForm = new Form('businessSignup', [
            $businessDetailsFieldset,
            $businessContactFieldset,
        ]);

        $formRenderer = new FormRenderer();

        $html = $businessSignupForm->accept($formRenderer);
        $this->assertEquals($html, '<fieldset id="businessDetails"><input type="text" name="name" /><input type="text" name="address" /><textarea name="about_text"></textarea></fieldset><fieldset id="businessContact"><input type="text" name="contact" /><input type="email" name="email" /><input type="number" name="phone_number" /></fieldset>');

    }

}