<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function test_null_object() : void
    {
        
        $subscribed_user = new NullObjectPattern\App\SubscribedUser('gold_subscription');
        $this->assertSame($subscribed_user->getSub(), 'gold_subscription');

        // you'll get an error since the $sub is set to null: 
        // TypeError: NullObjectPattern\App\SubscribedUser::getSub(): Return value must be of type string, null returned

        // $unsubscribed_user = new NullObjectPattern\App\SubscribedUser();
        // $this->assertSame($unsubscribed_user->getSub(), '');

        // replace with a null class
        $unsubscribed_user = new NullObjectPattern\App\UnSubscribedUser();
        $this->assertEquals($unsubscribed_user->getSub(), '');
    }

}