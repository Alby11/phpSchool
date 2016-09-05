<?php
    class foo {
        
        private $Name;
//        public function __construct() {
//            $this->myself = $this;
//        }
    }

    $wom = new foo();
    $bat = clone $wom;

    var_dump($wom);
    echo "\n";
    var_dump($bat);
    
    echo "\n";
    
    print (int)($wom == $bat) . "\n";
    print (int)($wom === $bat) . "\n";
    
    echo "\n";
    
    print (int)($wom == $wom) . "\n";
    print (int)($wom === $wom) . "\n";

?>