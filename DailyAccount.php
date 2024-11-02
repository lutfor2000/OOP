<?php
class DailyAccount{
    public function __construct(public $deposit){}
    private $items = [];

    function addItem($name,$cost){ 
        $this->items[$name] = $cost;
    }

    function CreateReport(){
        echo "Initial Deposit was {$this->deposit}.\n";
        $total = 0;
        foreach($this->items as $name => $cost){
            echo" {$name} - {$cost} \n";
            $total += $cost;
        }

        $balance = $this->deposit - $total;

        echo "Total : {$total} \n";
        echo "Balance : ".($this->deposit-$total)."\n";
        echo "Balance main :".($balance)."\n";
    }
}

$dailyaccount = new DailyAccount(1000); //instantiate 
$dailyaccount->addItem("Lutfor",100);
$dailyaccount->addItem("shanto",200);
$dailyaccount->addItem("kamal",300);
$dailyaccount->CreateReport();
