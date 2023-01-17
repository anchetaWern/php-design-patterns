<?php 

namespace ChainOfResponsibilityPattern\App;
use ChainOfResponsibilityPattern\App\Exceptions\DeveloperDidNotAskStackOverflowException;

class AskStackOverflow extends SolveIssue 
{

    public function solve(Developer $developer) 
    {
        if (!$developer->hasAskedStackoverflow) throw new DeveloperDidNotAskStackOverflowException;
        
        $this->next($developer);
    }

}