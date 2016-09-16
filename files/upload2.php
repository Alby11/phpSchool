<?php
    var_dump($_FILES) . "\n";
    print "Received {$_FILES['userfile']['name']} - its size is {$_FILES['userfile']['size']}";
?>