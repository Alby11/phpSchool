<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function some_func($a, $b) {
        for ($i = 0; $i < func_num_args(); ++$i) {
            $param = func_get_arg($i);
            echo "Received parameter $param.\n";
        }
    }

    function some_other_func($a, $b) {
        $param = func_get_args();
        $param = join(", ", $param);
        echo "Received parameters: $param.\n";
    }

    some_func(1,2,3,4,5,6,7,8);
    some_other_func(1,2,3,4,5,6,7,8);
?>