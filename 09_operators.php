<?php
$a = 45;
$b = 55;

echo "The result is ".($a+$b)."<br>";
echo "The result is ".($a/$b)."<br>";


$x = $a;
echo $x;
echo "<br>";
$x += 4;
echo $x;
echo "<br>";

$x = 8;
$y = 9;

echo "The result is <br> ";
echo  var_dump($x == $y);
echo "<br>";
echo  var_dump($x <> $y);  // <> Not equal to operator returns false if values we are comparing are not equal
echo "<br>";


$m = true;
$n = false;

echo var_dump($m and $n);
echo "<br>";
echo var_dump($m or $n);
echo "<br>";
echo var_dump($m && $n);
echo "<br>";
echo var_dump($m || $n);
echo "<br>";
echo var_dump(!$m);
?>