<?php
    interface boat {
        function sink();
        function scuttle();
        function dock();
    }

    interface plane {
        function takeoff();
        function land();
        function bailout();
    }
    
    abstract class car {
        public function accelerate(){
            echo "vroooom\n";
        }
        abstract protected function brake();
    }

    class boatplane implements boat, plane {
        public function sink() { }
        public function scuttle() { }
        public function dock() { }
        public function takeoff() { }
        public function land() { }
        public function bailout() { }
    }

    class panda extends car {
        public function accelerate () {
            echo "brum!!\n";
        }
        public function brake() {
            echo "brake!!!!!\n";
        }     
    }
    
    $obj = new boatplane();
    $panda = new panda();
    echo $panda->accelerate();
    echo $panda->brake();
    car::accelerate();
    panda::accelerate();
    panda::brake();
    
    
?>
