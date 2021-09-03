<?php

class Coder1{
    public $name;
    public $salary;

    public function __construct($name,$salary){
        $this->name = $name;
        $this->salary = $salary;
        $this->describe();

    }

    protected function describe(){
        echo "Name of the programmer is $this->name <br>";
        echo "Salary of the programmer is $this->salary <br>";
    }
}


class Coder2 extends Coder1 {
    public $lang = "Python";
    public function __construct($name,$lang,$salary){
        $this->name = $name;
        $this->lang = $lang;
        $this->salary = $salary;
        $this->describe();
    }
}


$abhi = new Coder1("Abhi",54545);
// $abhi->describe();

$rohan = new Coder2("Rohan","PHP",4545454);

?>