<?php 

namespace ChainOfResponsibilityPattern\App;

class Developer
{

    public function __construct(public bool $hasReadDocumentation, public bool $hasSearchedGoogle, public bool $hasAskedStackoverflow)
    {

    }

}