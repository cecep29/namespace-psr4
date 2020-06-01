<?php 

namespace App\Bike;

use App\Vehicle\VehicleInterface;

abstract class Bike implements VehicleInterface
{
    abstract public function ride();
}