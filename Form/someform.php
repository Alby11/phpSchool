<?php
    $_GET['Languages'] = implode(', ', $_GET['Languages']);
    $_GET['Story'] = str_replace("\n", "<br />", $_GET['Story']);

    print "Your name: {$_GET['Name']}<br />";
    print "Your password: {$_GET['Password']}<br />";
    print "Your age: {$_GET['Age']}<br /><br />";
    print "Your life story:<br />{$_GET['Story']}<br /><br />";
    print "Your favourite sport: {$_GET['FaveSport']}<br />";
    print "Languages you chose: {$_GET['Languages']}<br />";
?>