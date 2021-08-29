<?php

// include 'Db_connect1.php';
require 'Db_connect.php';


$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records found in the database";
echo "<br>";
$sno = 0;


while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    $sno = $sno + 1;
    echo $sno.'. Hello '.$row['name'].' Welcome to '.$row['dest'];
    echo "<br>";
}





// echo "This is working or not?";


?>