<?php 

namespace CommandPattern\App; 

use CommandPattern\App\Receiver\ButtonActionContext;

class Invoker 
{
    
    public function __construct(private ButtonActionContext $context, private string $action)
    {

    }


    public function run()
    {
        $class = __NAMESPACE__ . "\\command\\" . ucfirst(strtolower($this->action)) . "Command";

        if (class_exists($class)) {
            $command = new $class($this->context);
        } else {
            throw new \Exception('Command not found');
        }
        
        return $command->execute();
    }

}