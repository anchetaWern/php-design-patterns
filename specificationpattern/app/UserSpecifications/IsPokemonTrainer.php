<?php 

namespace SpecificationPattern\App\UserSpecifications;

use SpecificationPattern\App\User;

class IsPokemonTrainer implements UserOccupationSpecification
{

    public function matches(User $user)
    {
        return $user->occupation === 'pokemon_trainer';
    }
}