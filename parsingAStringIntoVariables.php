<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    if (isset($foo)) {
        print "Foo is $foo<br />";
    } else {
        print "Foo is unset<br />";
    }

    parse_str("foo=bar&bar=baz");

    if (isset($foo)) {
        print "Foo is $foo<br />";
    } else {
        print "Foo is unset<br />";
    }
    
    $array = array();

    if (isset($array['foo'])) {
        print "Foo is {$array['foo']}<br />";
    } else {
        print "Foo is unset<br />";
    }

    parse_str("foo=bar&bar=baz", $array);

    if (isset($array['foo'])) {
        print "Foo is {$array['foo']}<br />";
    } else {
        print "Foo is unset<br />";
    }
    
?>
