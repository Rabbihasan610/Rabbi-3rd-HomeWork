<?php


class Cars{

    function __construct()
    {
        echo "Wellcome TO Car Country</br>";
    }

    function forwords($car_name = 'default'){
        echo "$car_name Is moving forwords</br>";
    }
    function backwords($car_name = 'default'){
        return "$car_name Is moving forwords</br>";
    }

    function __destruct()
    {
        echo "Goodbye</br>";
    }
}


$obj = new Cars();
$obj->forwords('Toyota');
$backWords = $obj->backwords('BMW');
echo $backWords;





?>


