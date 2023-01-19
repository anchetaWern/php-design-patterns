<?php 

namespace SpecificationPattern\App\UserSpecifications;

use SpecificationPattern\App\User;

class IsMadScientist implements UserOccupationSpecification
{

    public function matches(User $user)
    {
        return $user->occupation === 'mad_scientist';
    }
}