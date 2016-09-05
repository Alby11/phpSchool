<?php
/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo "\t\t" . $this->public . "\n";
        echo "\t\t" . $this->protected . "\n";
        echo "\t\t" . $this->private . "\n";
    }
}

$obj = new MyClass();
echo "\t\t" . $obj->public . "\n"; // Works
echo "\t\t" . $obj->protected . "\n"; // Fatal Error
echo "\t\t" . $obj->private . "\n"; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected method, but not private
    protected $protected = 'Protected2';

    function printHello()
    {
        echo "\t\t" . $this->public . "\n";
        echo "\t\t" . $this->protected . "\n";
        echo "\t\t" . $this->private . "\n";
    }
}

$obj2 = new MyClass2();
echo "\t\t" . $obj2->public . "\n"; // Works
echo "\t\t" . $obj2->protected . "\n"; // Fatal Error
echo "\t\t" . $obj2->private . "\n"; // Undefined
$obj2->printHello(); // Shows Public, Protected2, Undefined

?>