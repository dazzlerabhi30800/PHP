<?php

echo "Welcome to local/global scope in php <br>";

$a = 45;
$b = 78;

function printValue(){
    global $a,$b;
    $a = 100;
    $b = 99;
    echo "The value of a and b inside function is $a and $b <br>";
}
echo $a;
echo "<br>";
printValue();
echo "The value of a and b outside function is $a and $b <br>";

echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>