<?php

echo "Let's understand OOPS<br>";


class Player{
    // Properties
    public $name;
    public $speed = 5;


    // Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$player1 = new Player();
$player1->set_name('Carl Johnson');
echo $player1->get_name();
echo "<br>";
echo $player1->speed;

?>