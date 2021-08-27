<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbabhi";

// Creating a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful
if(!$conn){
    die('Sorry we failed to connect to '.mysqli_connect_error());
}
else{
    echo "Your connection was successful <br>";
}

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records found in the database";
echo "<br>";


// Displays the rows returned by the query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'].'. Hello '.$row['name'].' Welcome to '.$row['dest'];
        echo "<br>";
    }


}


?>