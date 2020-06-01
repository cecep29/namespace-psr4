<?php 

namespace App\Engine;

use App\Engine\EngineInterface;

class CarEngine implements EngineInterface
{
    public function start()
    {
        return 'Mesin mobil dinyalakan';
    }

    public function stop()
    {
        return 'Mesin mobil dimatikan';
    }
}