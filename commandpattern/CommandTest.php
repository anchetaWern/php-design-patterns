<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use CommandPattern\App\Receiver\Video;
use CommandPattern\App\Receiver\Book;

class CommandTest extends TestCase
{

    public function test_command() : void
    {
        $save_video_invoker = new CommandPattern\App\Invoker(new Video, 'save');
        $this->assertEquals($save_video_invoker->run(), 'save video');

        $update_video_invoker = new CommandPattern\App\Invoker(new Video, 'update');
        $this->assertEquals($update_video_invoker->run(), 'update video');

        $save_book_invoker = new CommandPattern\App\Invoker(new Book, 'save');
        $this->assertEquals($save_book_invoker->run(), 'save book');

        $update_book_invoker = new CommandPattern\App\Invoker(new Book, 'update');
        $this->assertEquals($update_book_invoker->run(), 'update book');
    }

}