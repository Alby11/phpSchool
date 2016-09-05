<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $array = array("Foo", "Bar", "Baz");
    print "First time...\n";

    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }

    print "Second time...\n";

    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }

?>