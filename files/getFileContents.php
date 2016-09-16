<?php
    $filename=".\\desktop.ini";
    $filestring = file_get_contents($filename);
    var_dump($filestring);
    print "<br /><br />";
    $filearray = explode("\n", $filestring);
    var_dump($filearray);
    print "<br /><br /><br />";

    while (list($var, $val) = each($filearray)) {
        ++$var;
        $val = trim($val);
        print "Line $var: $val<br />";
    }
?>