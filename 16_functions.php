<?php

echo "This is a tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$Abhi = [44,45,56,56,56,34];
$sumMarks = processMarks($Abhi);
echo "The average score out of 600 is $sumMarks <br>";

?>