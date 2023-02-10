<?php 

namespace CommandPattern\App\Command;

use CommandPattern\App\Command\ButtonCommand;

class UpdateCommand extends ButtonCommand
{

    public function execute() : string
    {
        return $this->context->update();
    }
}