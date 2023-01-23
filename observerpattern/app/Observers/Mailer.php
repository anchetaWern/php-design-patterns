<?php 

namespace ObserverPattern\App\Observers;

use SplObserver;
use SplSubject;

class Mailer implements SplObserver
{
    private $sent_mail = [];

    public function update(SplSubject $subject): void
    {
        $this->sent_mail[] = $subject->getItem();
    }


    public function getSentMail()
    {
        return $this->sent_mail;
    }

}
