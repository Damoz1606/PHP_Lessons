<?php

function cicle_while($word)
{
    $index = 0;
    while ($index < strlen($word)) {
        $index++;
    }
    return "Number of letters: $index";
}

function cicle_doWhile($word)
{
    $index = 0;
    do {
        $index++;
    } while ($index < strlen($word));
    return "Number of letters: $index";
}

function cicle_for($word)
{
    echo "I'm a for cicle<br>";
    for ($i = 0; $i < strlen($word); $i++) {
        echo "$word[$i]<br>";
    }
    echo "<br><br>";
}

function cicle_forEach($word)
{
    echo "I'm a foreach cicle<br>";
    foreach ($word as $letter) {
        echo "$letter<br>";
    }
    echo "<br><br>";
}

echo "While cicle: ", cicle_while('Hello') . "<br>";
echo "Do While cicle: ", cicle_doWhile('Hello') . "<br>";

cicle_for('Hello');
$str = array('h', 'e', 'l', 'l', 'o');
cicle_forEach($str);
