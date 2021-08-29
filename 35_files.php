<?php

$fptr = fopen("my_file.txt","r");
if(!$fptr){
    die("Unable to open a file . Please enter a valid file name");
}

$content = fread($fptr,filesize("my_file.txt"));
fclose($fptr);
echo $content;
?>