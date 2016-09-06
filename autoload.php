<?php
    function __autoload($Class) {
        print "Bad class name: $Class! Getting class definition from {$Class}.php...\n";
        include "{$Class}.php";
    }

    $brutus = new poodle("Brutus");
    $brutus->bark();
    echo $brutus->DogTag->Words;
    echo dogtag::explainWhatIAm();
    echo "\$brutus class is: " . get_class($brutus) . "\n";
    if (class_exists(dogtag) == 1) echo "dogtag class exists.\n";
    echo "Declared classes are: \n";
    var_dump(get_declared_classes());
    
    
    
    
?>