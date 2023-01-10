<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function test_pokemon_facade() : void
    {
        $details_response = FacadePattern\App\PokemonDataGetter::fetch(['details']);
        $this->assertEquals($details_response, [
            'details' => 'the details',
        ]);

        $species_response = FacadePattern\App\PokemonDataGetter::fetch(['species']);
        $this->assertEquals($species_response, [
            'species' => 'the species',
        ]);

        $evolution_chain_response = FacadePattern\App\PokemonDataGetter::fetch(['evolutionChain']);
        $this->assertEquals($evolution_chain_response, [
            'evolutionChain' => 'the evolution chain',
        ]);

        
        $details_species_response = FacadePattern\App\PokemonDataGetter::fetch(['details', 'species']);
        $this->assertEquals($details_species_response, [
            'details' => 'the details',
            'species' => 'the species',
        ]);

        $details_evolution_chain_response = FacadePattern\App\PokemonDataGetter::fetch(['details', 'evolutionChain']);
        $this->assertEquals($details_evolution_chain_response, [
            'details' => 'the details',
            'evolutionChain' => 'the evolution chain',
        ]);

        $species_evolution_chain_response = FacadePattern\App\PokemonDataGetter::fetch(['species', 'evolutionChain']);
        $this->assertEquals($species_evolution_chain_response, [
            'species' => 'the species',
            'evolutionChain' => 'the evolution chain',
        ]);

        $all_response = FacadePattern\App\PokemonDataGetter::fetch(['details', 'species', 'evolutionChain']);
        $this->assertEquals($all_response, [
            'details' => 'the details',
            'species' => 'the species',
            'evolutionChain' => 'the evolution chain',
        ]);
        
    }
}