<?php 
$name = "Abhi is a noob programmer";
echo $name;
echo "<br>";
echo "The length of "."my string is ".strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"is");
echo "<br>";
echo str_replace("Abhi","Franklin",$name);
echo "<br>";
echo str_repeat($name,4);
echo "<br>";
echo "<pre>";
echo rtrim("    This is a rstring       ");
echo ltrim("    This is a rstring       ");
echo "</pre>";
?>