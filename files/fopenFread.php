<?php
    $filename = ".\\test.txt";
    $handle = fopen($filename, "rb");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    print $contents;
?>