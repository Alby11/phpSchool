<?php
    $filename=".\\desktop.ini";
    $filearray = file($filename);
    print "<br /><br />";
    var_dump($filearray);
    print "<br /><br /><br />";

    while (list($var, $val) = each($filearray)) {
        ++$var;
        $val = trim($val);
        print "Line $var: $val<br />";
    }
?>