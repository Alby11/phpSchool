<?php
    // your content here...
    $filename = 'counter.txt'; // our counter file
    if (!file_exists($filename)){
        touch($filename);
        $handle = fopen( $filename,"wb"); // open it for READING ("r")
        fwrite($handle, "1");
        fclose($handle);
    }
    $handle = fopen( $filename,"rb"); // open it for READING ("r")
    $counter = fread($handle, filesize($filename) ); // read in value
    fclose( $handle ); // close it whilst we work

    ++$counter; // increase the counter by one
    print "$counter hits to this page"; // print out the new value

    $handle = fopen( $filename,"wb"); // open it for WRITING ("w")
    fwrite( $handle, $counter); // write in the new value
    fclose( $handle ); // close it
?>