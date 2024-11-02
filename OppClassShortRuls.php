<?php
class mileageCalculator{
    public function __construct(public $pricePerLiter, public $distance, public $totalFuelPrice){}

    function CalculatorKPLM(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLiter;
        $mileage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$mileage} kmpl.\n";
    }

}

$motorcycle = new mileageCalculator(122,100,5000);
$motorcycle->CalculatorKPLM();