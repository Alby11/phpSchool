<?php

class dog {
        public $Name;

        public function bark() {
            print "Woof!\n";
        }
        
        public function __construct($DogName) { //, $Words) {
            print "Creating a Dog\n";
            $this->Name = $DogName;
            $this->DogTag = new dogtag;
            $this->DogTag->Words = "My name is $DogName. If you find me, please call 555-1234\n";
        }
    }
?>    
