<?php 

namespace AdapterPattern\App;

class Dropbox implements CloudFilesystemInterface
{
    public function openFile()
    {
        return 'opening dropbox file';
    }
}