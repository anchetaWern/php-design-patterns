<?php 

namespace CommandPattern\App\Receiver;

use CommandPattern\App\Receiver\ButtonActionContext;

class Book implements ButtonActionContext 
{

    public function save()
    {
        return 'save book';
    }


    public function update()
    {
        return 'update book';
    }

}

