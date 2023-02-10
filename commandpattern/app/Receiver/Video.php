<?php 

namespace CommandPattern\App\Receiver;

use CommandPattern\App\Receiver\ButtonActionContext;

class Video implements ButtonActionContext 
{

    public function save()
    {
        return 'save video';
    }


    public function update()
    {
        return 'update video';
    }
}

