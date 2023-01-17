<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function test_chain_one() : void
    {
        $this->expectException(ChainOfResponsibilityPattern\App\Exceptions\DeveloperDidNotReadDocumentationException::class);

        $developer = new ChainOfResponsibilityPattern\App\Developer(hasReadDocumentation: false, hasSearchedGoogle: false, hasAskedStackoverflow: false);
        
        $readDocumentation = new ChainOfResponsibilityPattern\App\ReadDocumentation;
        $searchGoogle = new ChainOfResponsibilityPattern\App\SearchGoogle;
        $askStackOverflow = new ChainOfResponsibilityPattern\App\AskStackOverflow;

        $readDocumentation->then($searchGoogle);
        $searchGoogle->then($askStackOverflow);

        $readDocumentation->solve($developer);
    }


    public function test_chain_two() : void 
    {
        $this->expectException(ChainOfResponsibilityPattern\App\Exceptions\DeveloperDidNotSearchGoogleException::class);

        $developer = new ChainOfResponsibilityPattern\App\Developer(hasReadDocumentation: true, hasSearchedGoogle: false, hasAskedStackoverflow: true);
        
        $readDocumentation = new ChainOfResponsibilityPattern\App\ReadDocumentation;
        $searchGoogle = new ChainOfResponsibilityPattern\App\SearchGoogle;
        $askStackOverflow = new ChainOfResponsibilityPattern\App\AskStackOverflow;

        $askStackOverflow->then($searchGoogle);
        $searchGoogle->then($readDocumentation);

        $askStackOverflow->solve($developer);
    }


    public function test_chain_three() : void 
    {
        $this->expectException(ChainOfResponsibilityPattern\App\Exceptions\DeveloperDidNotAskStackOverflowException::class);

        $developer = new ChainOfResponsibilityPattern\App\Developer(hasReadDocumentation: true, hasSearchedGoogle: true, hasAskedStackoverflow: false);
        
        $readDocumentation = new ChainOfResponsibilityPattern\App\ReadDocumentation;
        $searchGoogle = new ChainOfResponsibilityPattern\App\SearchGoogle;
        $askStackOverflow = new ChainOfResponsibilityPattern\App\AskStackOverflow;

        $searchGoogle->then($readDocumentation);
        $searchGoogle->then($askStackOverflow);

        $searchGoogle->solve($developer);
    }
}