<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function test_filesystem_adapter() : void
    {   
        $client = new AdapterPattern\App\Client();

        $local_filesystem = new AdapterPattern\App\LocalFilesystem();
        $this->assertEquals($client->readFile($local_filesystem), 'opening local file');

        // this wont work since dropbox doesnt adhere to the same interface
        /*
        $dropbox_filesystem = new AdapterPattern\App\Dropbox();
        $this->assertEquals($client->readFile($dropbox_filesystem), 'opening dropbox file');
        */
        
        // so we use an adapter which implements the interface we want to adhere to
        $dropbox_filesystem = new AdapterPattern\App\Dropbox();
        $this->assertEquals($client->readFile(new AdapterPattern\App\FilesystemAdapter($dropbox_filesystem)), 'opening dropbox file');
    }
}