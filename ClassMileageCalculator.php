<?php
class MileageCalculator{
    public $pricePerLiter;
    public $distance;
    public $totalFuelPrice;

    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLiter;
        $mileage = $this->distance / $totalFuel;
        echo "The Mileage of the vehicle is {$mileage} kmpl \n";
    }
}

$motorcycle = new MileageCalculator();
$motorcycle->pricePerLiter = 122;
$motorcycle->distance = 100;
$motorcycle->totalFuelPrice = 500;
$motorcycle->calculateKMPL();