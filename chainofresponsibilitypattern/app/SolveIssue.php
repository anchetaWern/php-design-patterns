<?php 

namespace ChainOfResponsibilityPattern\App;

abstract class SolveIssue 
{

    protected $nextSolver;

    abstract public function solve(Developer $developer);


    public function then(SolveIssue $solver)
    {
        $this->nextSolver = $solver;
    }


    protected function next(Developer $developer) 
    {
        if (!$this->nextSolver) return;

        $this->nextSolver->solve($developer);
    }

}