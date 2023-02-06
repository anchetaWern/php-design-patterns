<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function test_singleton_cant_be_initialized()
    {
        
        $this->expectErrorMessage('Call to private SingletonPattern\App\Config::__construct() from scope SingletonTest');
        $config = new SingletonPattern\App\Config;

    }

    public function test_singleton_works() : void
    {
        $config = SingletonPattern\App\Config::getInstance();
        $config->setProp('name', 'goku');

        $this->assertEquals($config->getProp('name'), 'goku');
        
    }

    public function test_singleton_cant_be_unset() : void 
    {
        $config = SingletonPattern\App\Config::getInstance();
        $config->setProp('name', 'vegeta');
        unset($config);

        $config2 = SingletonPattern\App\Config::getInstance();
        $this->assertEquals($config2->getProp('name'), 'vegeta');
    }

    public function test_singleton_is_really_single() : void 
    {
        $config = SingletonPattern\App\Config::getInstance();
        $config->setProp('wife', 'bulma');

        $config2 = SingletonPattern\App\Config::getInstance();
        $config2->setProp('wife', 'chi-chi');

        $this->assertNotEquals($config->getProp('wife'), 'bulma');
        $this->assertEquals($config->getProp('wife'), 'chi-chi');
    }
}