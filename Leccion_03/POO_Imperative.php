<?php
//Imperativo o Espaguetti ==>

$car_1 = ["marca" => "Toyota", "modelo" => "Corolla"];
$car_2 = ["marca" => "Hyundai", "modelo" => "Accent Vision"];

function show($car)
{
    echo "<p>Hi! I'm a $car->marca, $car->modelo</p><br>";
}

show($car_1);
