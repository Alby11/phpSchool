<?php

// source: http://code.tutsplus.com/tutorials/understanding-and-applying-polymorphism-in-php--net-14362

function __autoload ($class) {
    echo "Loading class: $class\n";
    include "$class.php";
}

$article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);
 
try {
    $writer = poly_base_Factory::getWriter();
}
catch (Exception $e) {
    $writer = new poly_writer_XMLWriter();
}
 
echo $article->write($writer);

?>