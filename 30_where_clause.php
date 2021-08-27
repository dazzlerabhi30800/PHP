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

$sql = "SELECT * FROM `phptrip` WHERE `dest` = 'Dallas'";
$result = mysqli_query($conn,$sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records found in the database";
echo "<br>";
$no = 1;


if($num>0){
    

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $no.'. Hello '.$row['name'].' Welcome to '.$row['dest'];
        echo "<br>";
        $no = $no + 1;
    }


}


// Usage of where clause to update data
$sql = "UPDATE `phptrip` SET `name` = 'Dazzlerupdated2' WHERE `dest` = 'Dallas'";
$result = mysqli_query($conn,$sql);
echo $result;
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows : $aff ";
echo "<br>";

if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not udpate the record successfully";
}

?>