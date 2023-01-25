<?php 

namespace NullObjectPattern\App;

class UnSubscribedUser extends User
{
    public function getSub(): string
    {
        return '';
    }
}