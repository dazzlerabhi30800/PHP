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

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 4;";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows : $aff <br>";

if($result){
    echo "Deleted successfully <br>";
}
else{
    $err = mysqli_error($conn);
    echo "Not delete successfully due to this error --> ".$err;
}


?>