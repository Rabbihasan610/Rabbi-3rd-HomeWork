<?php

use Cars as GlobalCars;

class Cars{
    public $color = ' ';


    function __construct($given_color='blue')
    {
        $this->color =$given_color;
    }

    public function addCar($car_name='Default'){
        return "New Cars name $car_name & color $this->color </br>";
    }
    public function removeCar($car_name='Default'){
        return "Remove Cars name $car_name & color $this->color ";
    }

}



$obj = new Cars('Green');

echo $obj->addCar('Toyota');

$rong = new Cars('Red');

echo $rong->removeCar('Bangla Car')





?>