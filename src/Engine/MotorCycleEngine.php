<?php 

namespace App\Engine;

use App\Engine\EngineInterface;

class MotorCycleEngine implements EngineInterface
{
    public function start()
    {
        return 'Mesin motor dinyalakan';
    }

    public function stop()
    {
        return 'Mesin motor dimatikan';
    }
}

