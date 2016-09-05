<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $text = "Word wrap will split this text up aaaaaaaaaadfasfdaaaaaaaaaa into smaller lines, which makes for easier reading and neater layout.";
    $text = wordwrap($text, 20, "<br />", 1);
    print $text;
?>