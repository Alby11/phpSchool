<?php
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], "uploaded\\{$_FILES['userfile']['name']}")) {
        print "Received {$_FILES['userfile']['name']} - its size is {$_FILES['userfile']['size']}";
    } else {
        print "Upload failed!";
    }
?>