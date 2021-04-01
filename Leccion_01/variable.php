<?php
//var_dump() show the type with the value
//is useful to check errors and check the va<br>riable which is send in PHP


//Variable
$number = 5;
echo "This is a number $number<br>";
var_dump($number);
echo "<br><br>";

//string
$word = "Word";
echo "This is a word $word<br>";
var_dump($word);
echo "<br><br>";

//Boolean
$boolean = true;
echo "This is a boolean $boolean<br>";
var_dump($boolean);
echo "<br><br>";

//array
$color = array("red", "yellow");
echo "This is a color $color[0]<br>";
var_dump($color);
echo "<br><br>";

//array with properties
$vegetables = array("vegetable_1" => "Lettuce", "vegetable_2" => "Onion");
echo "This is a vegetable $vegetables[vegetable_2]<br>";
var_dump($vegetables);
echo "<br><br>";

//object
$obj = (object)["fruit" => "Apple", "price" => "$0.00"];
echo "This is an object $obj->fruit<br>";
var_dump($obj);
echo "<br><br>";
