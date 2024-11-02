<?php
class MileageCalculator{
    public $pricePerLiter;
    public $distance;
    public $totalFuelPrice;

    function __construct($pricePerLiter, $totalFuelPrice,$distance){
        $this->pricePerLiter = $pricePerLiter;
        $this->totalFuelPrice = $totalFuelPrice;
        $this->distance = $distance;
    }

    function CalculateKPML(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLiter;
        $mileage = $this->distance / $totalFuel;
        echo "The Mileage of the vehicle is {$mileage} kmpl \n";
    }
}

$motorcycle = new MileageCalculator(122,500,300);
$motorcycle->CalculateKPML(); 

$car = new MileageCalculator(400,1000,120);
$car->CalculateKPML(); 

$flight = new MileageCalculator(5000,50000, 1000);

