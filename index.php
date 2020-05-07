<?php

class Animal{
    private $name;
    private $power = 100;
    
    public function attack($power){
        $this->power -= $power;
    }

    public function getPower(){
        return $this->power;
    }
}

class Dog extends Animal{
    public function honk(){
        return "wan wan";
    }
}

$dog = new Dog();
$dog->attack(30);
echo $dog->getPower();
echo "<br>";
echo $dog->honk();

?>