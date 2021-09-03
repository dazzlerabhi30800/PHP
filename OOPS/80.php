<?php


class Employee1{
    private $name = "Abhi";

    public function showName(){
        echo "$this->name";
    }
  
}

$abhi = new Employee1();
// echo $abhi->name; this will not work if variable is private
$abhi->showName();

?>  