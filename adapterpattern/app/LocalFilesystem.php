<?php 

namespace AdapterPattern\App;

class LocalFilesystem implements FilesystemInterface
{

    public function open()
    {
        return 'opening local file';
    }

}