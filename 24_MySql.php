<?php
echo "We are ready to connected to MySql server <br>";

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
    echo "Your connection was successful";
}

?>