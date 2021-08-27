<?php



/* Ways to connect to a MySQL database
1 MySQLi extension
2. PDO

*/

// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successful
if(!$conn){
    die('Sorry we failed to connect to '.mysqli_connect_error());
}
else{
    echo "Your connection was successful <br>";
}



// Creating a db
$sql = "CREATE DATABASE dbabhi5";
$result = mysqli_query($conn,$sql);

// Checking the creation of the database
if($result){
    echo "The database was created successfully <br>";
}
else{
    echo "The database wasn't created successfully due to error ".mysqli_error($conn);
}




?>