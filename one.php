<?php 
    function greatings($name){
        echo "Hell Mr. $name WellCome</br>";
    }

    function cars(){
        echo "Hello Php</br>";
    }

    function add($x,$y){
        $z = $x + $y;
        return $z;
    }
    greatings('Sakib');

    cars();

    echo add(4,6);



?>