<?php



// Connecting to the database

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

// Create a table in sql
$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn,$sql);

// Checking the creation of the database
if($result){
    echo "The table was created successfully <br>";
}
else{
    echo "The table wasn't created successfully due to error ".mysqli_error($conn);
}





?>