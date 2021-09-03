<?php

class Employee{
    public $name;
    public $salary;

    // Constructor without arguements
    // function __construct(){
    //     echo "This is the constructor for Employee";
    // }


    // constructor with arguements
    function __construct($name,$salary){
        $this->name = $name;
        $this->salary = $salary;
    }
}

$abhi = new Employee('abhi',45454);
// echo "<br>";
$michael = new Employee('michael',465656);
// echo "<br>";
$franklin = new Employee('franklin',4546565);
// echo "<br>";
$trevor = new Employee('trevor',45465656);
// echo "<br>";


echo "The salary for $trevor->name is $trevor->salary";

?>