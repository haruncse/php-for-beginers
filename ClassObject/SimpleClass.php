<?php

class SimpleClass{
    public $simpleVariable="";
    CONST CONST_VALUE=34;
    public static $thisIsStaticVarable="500";

    function __construct($variable1) {
        echo"<h1> This is simple Constructor</h1>";
        $this->simpleVariable=$variable1;
        echo"<br>";
        echo SimpleClass::CONST_VALUE;
        echo"<br>";
        echo self::CONST_VALUE;
        echo"<br>";
        echo self::$thisIsStaticVarable;
    }
    public function function1()  {
        print("This is Function 1");
    }

    public function function2(){
        echo"<br>";
        print("This is function 2");
    }

    public function setterOne($variable){
        $this->simpleVariable=$variable;
    }

    public function getterOne(){
        self::simpleStaticFunction();
        return $this->simpleVariable;

    }
    
    public static function simpleStaticFunction(){
        echo"<h2> Static Function </h2>";
    }

    function __destruct() {
        echo"<h3>Destructor</h3>";
    }
}

$object1 = new SimpleClass(20);
// $object1->function1();
// $object1->function2();
// print($object1->simpleVariable);

$object2 = new SimpleClass(10);
$object1->setterOne(100);
$object2->setterOne(50);
print($object2->getterOne());

print($object1->getterOne());
// $object1->simpleStaticFunction();
SimpleClass::simpleStaticFunction();

?>