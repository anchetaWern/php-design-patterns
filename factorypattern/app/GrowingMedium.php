<?php 

namespace FactoryPattern\App;

abstract class GrowingMedium
{
    public function __construct(public int $ratio) {

    }
}