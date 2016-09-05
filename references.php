<?php
	
    print '<br />' . __FILE__ . '<br /><br />';
	
    $a = 10;
    $b =& $a;
    print $a . '<br />';
    print $b . '<br />';
    ++$a;
    print $a . '<br />';
    print $b . '<br />';
    ++$b;
    print $a . '<br />';
    print $b . '<br /><br />';

    print <<<'EOT'
    $a = 10; '<br />'
    $b =& $a; '<br />'
    print $a '<br />'
    print $b '<br />'
    ++$a; '<br />'
    print $a '<br />'
    print $b '<br />'
    ++$b; '<br />'
    print $a '<br />'
    print $b '<br />'
EOT;
	
?>