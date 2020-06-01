<?php 

namespace App\Bike;

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