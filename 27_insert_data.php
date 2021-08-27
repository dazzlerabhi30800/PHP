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

// Variables to be inserted into the table
$name = "Trevor";
$destination = "Russia";

// SQL query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn,$sql);



// Add a new trip to the table in the database
if($result){
    echo "The record has been inserted successfully <br>";
}
else{
    echo "The record hasn't been inserted successfully due to error ".mysqli_error($conn);
}

?>