<?php

//Function without arguments
function hello() {
    echo "Hello World<br>";
}

//Function with arguments
function hello_2($str) {
    echo $str."<br>";
}

//Funtion with return
function example($return){
    return $return;
}


hello();
hello_2("Hello World!");
echo example("I'm returning<br>");

?>