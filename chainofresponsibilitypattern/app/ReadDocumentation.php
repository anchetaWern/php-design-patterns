<?php 

namespace ChainOfResponsibilityPattern\App;

use ChainOfResponsibilityPattern\App\Exceptions\DeveloperDidNotReadDocumentationException;

class ReadDocumentation extends SolveIssue 
{
 
    public function solve(Developer $developer) 
    {
        if (!$developer->hasReadDocumentation) throw new DeveloperDidNotReadDocumentationException;
        
        $this->next($developer);
    }
}