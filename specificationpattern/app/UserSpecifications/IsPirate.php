<?php 

namespace SpecificationPattern\App\UserSpecifications;

use SpecificationPattern\App\User;

class IsPirate implements UserOccupationSpecification
{

    public function matches(User $user)
    {
        return $user->occupation === 'pirate';
    }
}