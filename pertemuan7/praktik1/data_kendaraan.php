<?php 

    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor","Bensin",2);
    $submarine = new Submarine("Kapal Selam","Biogas",700);

    echo "info Motor:<br>";
    $motor->getInfo();
    echo "<br>";

    echo "info Submarine:<br>";
    $submarine->getInfo();
    echo "<br>";


?>