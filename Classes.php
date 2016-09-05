<?php

class dogtag {

    private $Words;
    
    public function __construct($someWords) {
        $this->Words = $someWords;;
    }
    
    public function _getWords()  {
        return $this->Words;
    }
    
    public function _setWords($someWords)  {
        $this->Words = $someWords;
    }

}

class dog {

    protected $Name;
    private $DogTag;
    private $Test = "test";

    protected function bark() {
        print "Woof!\n";
    }

}

class poodle extends dog {
    
    public function _getName() {
        return $this->Name;
    }
    
    public function _setName($aName) {
        $this->Name = $aName;
    }

    public function bark() {
        print "Yip!\n";
    }

}

$poppy = new poodle;
//$poppy->Name = "Poppy"; / $Name is protected, can be accessed only inside subclass definition
$poppy->_setName("Poppy");
echo $poppy->_getName() . "\n";
$poppy->DogTag = new dogtag("");
$poppy->DogTag->_setWords("My name is Poppy. If you find me, please call 555-1234\n");
echo $poppy->DogTag->_getWords();
unset($poppy->DogTag);
//echo $poppy->DogTag->_getWords(); // Gives error because it's unset
$poppy->DogTag = new dogtag("My name is Poppy. If you find me, don't call");
echo $poppy->DogTag->_getWords();
//var_dump($poppy);

?>
