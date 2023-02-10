<?php 

namespace CommandPattern\App\Command;

use CommandPattern\App\Command\ButtonCommand;

class SaveCommand extends ButtonCommand
{

    public function execute() : string
    {
        return $this->context->save();
    }
}