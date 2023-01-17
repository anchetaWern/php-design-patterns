<?php 

namespace ChainOfResponsibilityPattern\App;
use ChainOfResponsibilityPattern\App\Exceptions\DeveloperDidNotSearchGoogleException;

class SearchGoogle extends SolveIssue 
{

    public function solve(Developer $developer) 
    {
        if (!$developer->hasSearchedGoogle) throw new DeveloperDidNotSearchGoogleException;
        
        $this->next($developer);
    }
}