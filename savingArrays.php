<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $array["a"] = "Foo";
    $array["b"] = "Bar";
    $array["c"] = "Baz";
    $array["d"] = "Wom";

    $str = serialize($array);
    $strenc = urlencode($str);
    print $str . "\n";
    print $strenc . "\n";
    $strEncBin = rawurlencode($str);
    print $strEncBin . "\n";        
    
?>