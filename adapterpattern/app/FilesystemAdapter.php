<?php 

namespace AdapterPattern\App;

class FilesystemAdapter implements FilesystemInterface 
{

    public function __construct(private CloudFilesystemInterface $filesystem)
    {

    }

    public function open()
    {
        return $this->filesystem->openFile();
    }

}