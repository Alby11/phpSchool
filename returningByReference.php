<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function & square1($number) {
        return $number * $number;
    }

    $val = & square1(10);
    print $val . "<br />";
    $val1 = square1(15);
    print $val1 . "<br />";
    print $val . "<br />";
    
    class Fruit {
        private $color = "red";

        public function getColor() {
            return $this->color;
        }

        public function &getColorByRef() {
            return $this->color;
        }
    } 

    echo "\nTEST RUN 1:\n\n";
    $fruit = new Fruit;
    $color = $fruit->getColor();
    echo "Fruit's color is $color\n"; 
    $color = "green"; // does nothing, but bear with me
    $color = $fruit->getColor();
    echo "Fruit's color is $color\n"; 

    echo "\nTEST RUN 2:\n\n";
    $fruit = new Fruit;
    $color = &$fruit->getColorByRef(); // also need to put & here
    echo "Fruit's color is $color\n"; 
    $color = "green"; // now this changes the actual property of $fruit
    $color = $fruit->getColor();
    echo "Fruit's color is $color\n";

    
?>