<?php
    class dogtag {
        public $Words;
    }
    
    class dog {
        public $Name;
        public $DogTag;

        public function bark() {
            print "Woof!\n";
        }
        
        public function __construct($DogName) { //, $Words) {
            print "Creating a Dog\n";
            $this->Name = $DogName;
            $this->DogTag = new dogtag;
            $this->DogTag->Words = "My name is $DogName. If you find me, please call 555-1234\n";
//            $this->DogTag->Words = $Words;
        }
    }
    
    class poodle extends dog {
        
        public function bark() {
            print "Yip!\n";
        }
        
        public function __construct($DogName) {
            parent::__construct($DogName);
            print "Creating a Poodle\n";
        }
        
        public function __destruct() {
            echo "$this->Name is no more...\n";
        }
        
    }
    
//    $poppy = new poodle("Poppy", "My name is $DogName. If you find me, please call 555-1234"); // see line 18. Returns: PHP Notice:  Undefined variable: DogName
    $poppy = new poodle("Poppy");
    print $poppy->DogTag->Words;
//    print $poppy->__destruct();
    
    echo "\n" . (integer) isset($poppy) . "\n\n";
    echo "\n" . (integer) ($poppy instanceof poodle) . "\n\n";
    
    unset($poppy);
    
    echo "\n" . (integer) isset($poppy) . "\n\n";

?>