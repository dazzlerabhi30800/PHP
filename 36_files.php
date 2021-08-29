<?php

$fptr = fopen("my_file.txt","r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// Reading a file line by line
// while($a= fgets($fptr)){
//     echo $a;
// }
// echo "End of the line has been reached";
echo fgetc($fptr);


// while($a= fgetc($fptr)){
//     echo $a;
// // break;
// }
// echo "End of the line has been reached";


// Program to read the content of the file until a . is encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);


?>