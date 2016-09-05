<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $val = 2;

    function square1($number) {
        return $number * $number;
    }

    $val = square1($val);

    echo $val . '<br />';
    
    function square2(&$number) {
        $number = $number * $number;
    }

    square2($val);

    print $val . '<br />';
    
//    One key thing to remember is that a reference is a 
//    reference to a variable . If you define a function as accepting 
//    a reference to a variable, you cannot pass a constant into it. 
//    That is, given our definition of square2(), you cannot call the 
//    function using square2(10);, as 10 is not a variable, 
//    so it cannot be treated as a reference.
    
?>