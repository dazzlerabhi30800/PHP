<?php

echo "Multidimensional Arrays <br>";

$multiDim = array(array(4,5,6,7),
                   array(8,9,1,0),
                   array(2,3,9,6));


// Printing the contents of the 2-D array
// for ($i=0; $i <count($multiDim) ; $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i=0; $i <count($multiDim) ; $i++) { 
    for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>