<?php

namespace BuilderPattern\App\Builders;

use BuilderPattern\App\Sandwich\Sandwich;

interface Builder
{
    public function createSandwich();

    public function addBread();

    public function addSpread();

    public function addFilling();

    public function addGarnish();

    public function getSandwich() : Sandwich;
}