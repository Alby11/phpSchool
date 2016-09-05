<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    $string = "This is a strpos() test";
    $pos = strpos($string, "is ");
    if ($pos === false) {
        print "Not found\n";
    } else {
        print "Found at $pos!\n";
    }
?>