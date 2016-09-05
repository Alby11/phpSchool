<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    echo password_hash("frosties", PASSWORD_DEFAULT), "\n";
    print "<br />";
    echo password_hash("frosties", PASSWORD_DEFAULT), "\n";
    print "<br />";
    echo password_hash("frosties", PASSWORD_DEFAULT), "\n";
    print "<br />";

    $hash = password_hash("frosties", PASSWORD_DEFAULT);
    if (password_verify("frosteies", $hash)) {
        echo "Password match!\n";
    } else {
        echo "Password do not match!\n";
    }

?>