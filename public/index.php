<?php 

require 'vendor/autoload.php';

use App\Bike\Bicycle;

use App\Bike\SportBikeMotorCycle;

use App\Bike\StandardMotorCycle;

use App\Car\Sedan;

use App\Car\Truck;

use App\Engine\MotorCycleEngine;
use App\Engine\CarEngine;

$sepeda = new Bicycle();

echo $sepeda->ride();
echo PHP_EOL;
echo $sepeda->run();
echo PHP_EOL;
echo PHP_EOL;

$motorcycle_engine = new MotorCycleEngine();

$ninjazx = new SportBikeMotorCycle($motorcycle_engine);
echo $ninjazx->getEngineStart();
echo PHP_EOL;
echo $ninjazx->ride();
echo PHP_EOL;
echo $ninjazx->run();
echo PHP_EOL;
echo $ninjazx->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;

$astrea_prima = new StandardMotorCycle($motorcycle_engine);
echo $astrea_prima->getEngineStart();
echo PHP_EOL;
echo $astrea_prima->ride();
echo PHP_EOL;
echo $astrea_prima->run();
echo PHP_EOL;
echo $astrea_prima->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;

$car_engine = new CarEngine();

$city = new Sedan($car_engine);
echo $city->getEngineStart();
echo PHP_EOL;
echo $city->drive();
echo PHP_EOL;
echo $city->run();
echo PHP_EOL;
echo $city->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;

$fuso = new Truck($car_engine);
echo $fuso->getEngineStart();
echo PHP_EOL;
echo $fuso->drive();
echo PHP_EOL;
echo $fuso->run();
echo PHP_EOL;
echo $fuso->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;


