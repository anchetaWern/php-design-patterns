<?php 

namespace FacadePattern\App;

class PokemonDataGetter
{   

    public static function fetch(array $methods): array 
    {
        $data = [];
        foreach ($methods as $method) {
            $data[$method] = (new PokemonData)->$method();
        }
        return $data;
    }

}