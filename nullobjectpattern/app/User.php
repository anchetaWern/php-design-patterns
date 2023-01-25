<?php 

namespace NullObjectPattern\App;

abstract class User
{   
    protected $sub;

    public function __construct(string $sub = null)
    {
        $this->sub = $sub;
    }

    public abstract function getSub() : string;
    
}