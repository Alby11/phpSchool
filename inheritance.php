<?php

class Person {

    private $name;
    private $age;

    function __construct($name, $age) {
        echo "Person __construct";
        $this->name = $name;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAge($age) {
        $this->age = $age;
    }

}

class SportsMan extends Person {

//    function __construct($name, $age) {
//        echo "SportsMan __construct\n";
//    }

}

$alberto = new SportsMan("alberto", 35);
