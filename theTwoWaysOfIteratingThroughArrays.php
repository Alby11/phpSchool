<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//    $array = [1, 2, "", 4, 5, 6, 7];
    $array["a"] = 1;
    $array["b"] = 2;
    $array["c"] = 3;
    $array["d"] = "";
    $array["e"] = 4;
    $array["f"] = 5;

    for ($i = 0; $i < count($array); ++$i) {
        print $array[$i];
        print "\n";
    }
    
    print "\n";
    
    foreach($array as $val) {
        print $val;
        print "\n";
    }
    
    print "\n";
    
    foreach ($array as $key => $val) {
        print "$key = $val\n";
    }
    
    print "\n";
    
    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }
    
    print "\n";

?>