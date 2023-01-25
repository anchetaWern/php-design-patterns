<?php 

namespace NullObjectPattern\App;

class SubscribedUser extends User
{
    public function getSub(): string
    {
        return $this->sub;
    }
}