<?php
    class employee {
        static public $NextID = 1;
        public $ID;

        public function __construct() {
            $this->ID = self::$NextID++;
        }
        
        static public function sayHi () {
            echo "HI!!!!!!!!!!\n";
        }
    }

    $bob = new employee;
    $jan = new employee;
    $simon = new employee;

    print $bob->ID . "\n";
    print $jan->ID . "\n";
    print $simon->ID . "\n";
    print employee::sayHi();
    print employee::$NextID . "\n";
?>