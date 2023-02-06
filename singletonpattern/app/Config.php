<?php 

namespace SingletonPattern\App;

class Config 
{
    private static Config $instance;

    private array $props = [];

    private function __construct() 
    {

    }


    public static function getInstance(): Config
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    public function setProp(string $name, string $value): void
    {
        $this->props[$name] = $value; 
    }


    public function getProp(string $name): string
    {
        return $this->props[$name];
    }


}