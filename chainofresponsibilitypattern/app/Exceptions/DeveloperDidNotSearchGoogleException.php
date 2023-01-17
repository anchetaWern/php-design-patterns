<?php 

namespace ChainOfResponsibilityPattern\App\Exceptions;
use Exception;

class DeveloperDidNotSearchGoogleException extends Exception
{

    public function __construct() {
       
        parent::__construct("You haven't searched google yet.", code: 0, previous: null);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}