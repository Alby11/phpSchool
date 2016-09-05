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
        
        public function __sleep() {
           // do stuff here
           echo "SLEEPING......\n";
           var_dump(array_keys(get_object_vars($this))) . "\n";
           return array_keys(get_object_vars($this));
        }
        
        public function __wakeup() {
            echo "AWAKEN!!!!!!!!!!!!!\n";
        }
        
        public function __destruct() {
            echo "$this->Name is no more...\n";
        }
        
    }
   
    $poppy = new poodle("Poppy");
    $safepoppy = urlencode(serialize($poppy));
    var_dump($safepoppy) . "\n";
    $restorepoppy = unserialize(urldecode($safepoppy))
    
    
    
 ?>