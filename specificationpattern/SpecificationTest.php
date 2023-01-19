<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    public function test_specs() : void
    {
       $pirateUser = new SpecificationPattern\App\User(name: 'luffy', occupation: 'pirate');
       $pokemonTrainerUser = new SpecificationPattern\App\User(name: 'ash', occupation: 'pokemon_trainer');
       $madScientistUser = new SpecificationPattern\App\User(name: 'rintaro', occupation: 'mad_scientist');

       $pirateSpecification = new SpecificationPattern\App\UserSpecifications\IsPirate;
       $pokemonTrainerSpecification = new SpecificationPattern\App\UserSpecifications\IsPokemonTrainer;
       $madScientistSpecification = new SpecificationPattern\App\UserSpecifications\IsMadScientist;

       $this->assertTrue($pirateSpecification->matches($pirateUser));
       $this->assertTrue($pokemonTrainerSpecification->matches($pokemonTrainerUser));
       $this->assertTrue($madScientistSpecification->matches($madScientistUser));


       $this->assertFalse($pirateSpecification->matches($pokemonTrainerUser));
       $this->assertFalse($pirateSpecification->matches($madScientistUser));

       $this->assertFalse($pokemonTrainerSpecification->matches($pirateUser));
       $this->assertFalse($pokemonTrainerSpecification->matches($madScientistUser));

       $this->assertFalse($madScientistSpecification->matches($pirateUser));
       $this->assertFalse($madScientistSpecification->matches($pokemonTrainerUser));
    }
}