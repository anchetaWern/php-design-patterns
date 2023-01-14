<?php 

namespace AdapterPattern\App;

class Client
{
    public function readFile(FilesystemInterface $filesystem)
    {
        return $filesystem->open();
    }
}