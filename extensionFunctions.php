<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $extensions = get_loaded_extensions();

    foreach($extensions as $extension) {
        echo $extension;
        echo ' (', implode(', ', get_extension_funcs($extension)), ')<br />';
    }

?>