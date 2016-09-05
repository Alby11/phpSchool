<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    print time();
    print '<br />';
    print microtime(true);
    print '<br />';
    print strtotime("22nd December 1979");
    print '<br />';
    print strtotime("22 Dec. 1979 17:30");
    print '<br />';
    print strtotime("1979/12/22");
    print '<br />';
    print strtotime("22-12-1979");
    print '<br />';
    print strtotime("Next Sunday");
    print '<br />';
    print strtotime("2 days", time() - (86400 * 2));
    print '<br />';
    print strtotime("1 year ago", 123456789);
    print '<br />';
    print date("\T\o\d\a\y\ \i\s l\ \T\h\\e\ jS \o\\f\ F \ Y", time());

    print <<<'EOT'
    print time();
    print '<br />';
    print microtime(true);
    print '<br />';
    print strtotime("22nd December 1979");
    print '<br />';
    print strtotime("22 Dec. 1979 17:30");
    print '<br />';
    print strtotime("1979/12/22");
    print '<br />';
    print strtotime("22-12-1979");
    print '<br />';
    print strtotime("Next Sunday");
    print '<br />';
    print strtotime("2 days", time() - (86400 * 2));
    print '<br />';
    print strtotime("1 year ago", 123456789);
    print '<br />';
    print date("\T\o\d\a\y\ \i\s l\ \T\h\\e\ jS \o\\f\ F \ Y", time());
EOT;
?>