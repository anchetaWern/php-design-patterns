<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use MementoPattern\App\Garden;
use MementoPattern\App\Caretaker;

class MementoTest extends TestCase
{
    public function test_memento() : void
    {
        $initialStatus = 'healthy';
        $initialPlants = ['tomato', 'okra', 'basil', 'pepper', 'chives'];
        $initialInstallations = ['uv net'];

        $garden = new Garden($initialStatus, $initialPlants, $initialInstallations);
        $caretaker = new Caretaker($garden); 
        $firstSnapshotId = 'mygarden-' . uniqid();

        $this->assertEquals($garden->getStatus(), $initialStatus);
        $this->assertEquals($garden->getPlants(), $initialPlants);
        $this->assertEquals($garden->getInstallations(), $initialInstallations);

        $caretaker->backup($firstSnapshotId);

        $updatedStatus = 'unhealthy';
        $updatedPlants = ['spinach', 'kangkong', 'pechay', 'bokchoy', 'arugula'];
        $updatedInstallations = ['trelis', 'drip'];

        $garden->setStatus($updatedStatus);
        $garden->setPlants($updatedPlants);
        $garden->setInstallations($updatedInstallations);

        $secondSnapshotId = 'mygarden-' . uniqid();
        $caretaker->backup($secondSnapshotId);


        $this->assertEquals($garden->getStatus(), $updatedStatus);
        $this->assertEquals($garden->getPlants(), $updatedPlants);
        $this->assertEquals($garden->getInstallations(), $updatedInstallations);

        $caretaker->restore($firstSnapshotId);

        $this->assertEquals($garden->getStatus(), $initialStatus);
        $this->assertEquals($garden->getPlants(), $initialPlants);
        $this->assertEquals($garden->getInstallations(), $initialInstallations);

        $caretaker->restore($secondSnapshotId);

        $this->assertEquals($garden->getStatus(), $updatedStatus);
        $this->assertEquals($garden->getPlants(), $updatedPlants);
        $this->assertEquals($garden->getInstallations(), $updatedInstallations);


    }
}