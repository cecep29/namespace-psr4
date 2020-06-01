<?php 

namespace App\Engine;

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

