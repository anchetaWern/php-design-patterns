<?php 

namespace CommandPattern\App\Command;

use CommandPattern\App\Receiver\ButtonActionContext;


abstract class ButtonCommand {

    public function __construct(protected ButtonActionContext $context)
    {

    }

    abstract public function execute() : string;

}