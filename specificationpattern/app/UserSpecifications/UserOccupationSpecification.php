<?php 

namespace SpecificationPattern\App\UserSpecifications;

use SpecificationPattern\App\User;

interface UserOccupationSpecification
{

    public function matches(User $user);

}