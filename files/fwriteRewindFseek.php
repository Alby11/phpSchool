<?php
    $filename = ".\\test.txt";
    $handle = fopen($filename, "wb+");
    $contentToWrite = "TESTtestTESTtestTEST";
    $numbytes = fwrite($handle, $contentToWrite);
    print "$numbytes bytes written\n";
    rewind($handle);
//    fclose($handle);
//    $handle = fopen($filename, "rb");
    $contents = fread($handle, filesize($filename));
    print $contents . "\n";
    fseek($handle, 8);
    $contents = fread($handle, filesize($filename));
    print $contents . "\n";
    fclose($handle);
?>
