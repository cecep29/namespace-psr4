<?php 

namespace App\Bike;

use App\Bike\Bike;

class Bicycle extends Bike 
{
    public function ride()
    {
        return 'Sepeda dinaiki';
    }

    public function run()
    {
        return 'Sepeda jalan';
    }
}