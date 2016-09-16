<?php

$filename = "c:\\users\\tallonea\\documents\\github\\phpschool\\files\\test.txt";
$fileinfo = pathinfo($filename);
var_dump($fileinfo);
$fileinfo = basename($filename);
var_dump($fileinfo);
$fileinfo = basename($filename, ".txt");
var_dump($fileinfo);

?>