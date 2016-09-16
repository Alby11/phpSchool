<?php
    
    clearstatcache(); 
    $filename = "test.txt";
    print (int) file_exists($filename);
    print "\n";
    $filename = "atest.txt";
    clearstatcache(); 
    print (int) file_exists($filename);
    

?>