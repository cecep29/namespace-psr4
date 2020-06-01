<?php 

namespace App\Car;

use App\Vehicle\VehicleInterface;

abstract class Car implements VehicleInterface 
{
    abstract public function drive();
}