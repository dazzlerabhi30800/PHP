<?php


echo "This a tutorial on inheritance<br>";


class Coder {
    public $name = "Abhi";
    private $salary = 45454;
    private $grade = 3;

    function set_salary($salary){
        $this->salary = $salary;
    }
    function show_salary(){
        echo "The salary of $this->name is $this->salary <br>";
    }


    function showName(){
        echo "The name of this coder is $this->name <br>";
    }
}


class Programmer extends Coder {
    private $lang = "PHP";

    function changeLanguage($lang){
        $this->lang = $lang;
    }
    function showLanguage(){
        echo "The language $this->name is working with is $this->lang";
    }
}



$abhi = new Coder();
$abhi->name = "Dazzler Abhi";
$abhi->showName();
$abhi->set_salary(45454);
$abhi->show_salary();


$franklin = new Programmer();
$franklin->changeLanguage("Python");
$franklin->name = "Franklin";
$franklin->showLanguage();



?>