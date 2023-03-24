<?php

    class Fruit {
        // Property
        public $name;
        public $color;

        //method
        function getName() {
            return $this->name;
        }

        function getColor() {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->color = "Red";
    
    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->color = "Yellow";

    echo $apple->getName();
    echo $apple->getColor();
    echo "<br><br>";
    echo $banana->getName();
    echo $banana->getColor();

?>