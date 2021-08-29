<?php

echo "Welcome to write files in php";

// Writing to a file
// $fptr = fopen("my_file2.txt","w");
// fwrite($fptr,"This is the content in new file.Please don't argue on this topic again.\n");
// fwrite($fptr,"This is another content. ");
// fclose($fptr);


// Appending to a file
$fptr = fopen("my_file2.txt","a");
fwrite($fptr,"This is being appended to the file.\n");
fclose($fptr);

?>