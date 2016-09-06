<?php

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

?>