<?php
class PetrolMileageCalculator{
    public $pricePerLiter = 122;
    public $totalFuelPrice;
    public $distance;

    public function __construct($distance ,$totalFuelPrice){
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }

    function CalculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLiter;
        $mileage = $this->distance / $totalFuel;
        echo "The mileage of vehicle is {$mileage} kmpl and runs on petrol.\n ";
    }
}

class OctaneMileageCalculator{
    public $pricePerLiter = 130;
    public $distance;
    public $totalFuelPrice;

    public function __construct($distance,$totalFuelPrice){
       $this->distance = $distance;
       $this->totalFuelPrice = $totalFuelPrice;
    }

    function CalculatorKPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLiter;
        $mileage = $this->distance / $totalFuel;
        echo "The mileage of vehicle is {$mileage} kmpl and runs on Octane.\n ";
        echo "Programer and Software Engineer Lutfor Rhaman Shanto";

    }
}

$motorcycle = new PetrolMileageCalculator(100,1000);
$motorcycle->CalculateKMPL();

$car = new OctaneMileageCalculator(200,3000);
$car->CalculatorKPL();