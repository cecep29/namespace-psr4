<?php 

namespace App\Car;

use App\Car\Car;
use App\Engine\CarEngine;

class Truck extends Car 
{
    private $car_engine;

    public function __construct(CarEngine $car_engine)
    {
        $this->car_engine = $car_engine;
    }

    public function drive()
    {
        return 'Mobil truck dikemudikan';
    }

    public function run()
    {
        return 'Mobil truck jalan';
    }

    public function getEngineStart()
    {
        return $this->car_engine->start();
    }

    public function getEngineStop()
    {
        return $this->car_engine->stop();
    }
}