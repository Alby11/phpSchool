<?php
    echo ini_get("allow_url_fopen") . "\t\n";
//    $filename = "http://localhost/github/phpSchool/files/desktop.ini";
    $filename = ".\\test.txt";
    echo is_writeable($filename) . "\t\n\n";
    $myarray[] = "This is line one";
    $myarray[] = "This is line two";
    $myarray[] = "This is line three";
    $mystring = implode("\n", $myarray);
    $numbytes = file_put_contents($filename, $mystring, FILE_APPEND);
    print "$numbytes bytes written\n";
?>