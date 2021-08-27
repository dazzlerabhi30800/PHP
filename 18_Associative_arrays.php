<?php

// Normal arrays are called indexed arrays.

echo "Welcome to the associative arrays <br>";

$favCol = array('Abhi'=>'red','Michael'=>'black','franklin'=>'blue');
echo $favCol['Abhi'];
echo "<br>";
foreach ($favCol as $key => $value) {
    echo "The favourite color of $key is $value <br>";
}

?>