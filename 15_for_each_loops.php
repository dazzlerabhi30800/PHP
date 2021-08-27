<?php

echo "For each loops <br>";

$arr = array('bananas','apples','avacado','cranberry','grapes');

// for ($i=0; $i < count($arr); $i++) { 
//      echo $arr[$i];
//      echo "<br>";
// }


// Better way to do this with for each loops

foreach ($arr as  $value) {
    echo $value."<br>";
}

?>