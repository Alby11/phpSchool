<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $string1 = "foo";
    $string2 = "bar";
    $result = strcmp($string1, $string2);

    switch ($result) {
        case -1: print "Foo comes before bar"; break;
        case 0: print "Foo and bar are the same"; break;
        case 1: print "Foo comes after bar"; break;
    }
    
    include 'prego.php';
?>
