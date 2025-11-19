<?php

class SimpleClass
{
    public $simpleVariable = "";
    const CONST_VALUE = 34;
    public static $thisIsStaticVarable = "500";
    private $privateVariable = "I am Private Variable";

    function __construct($variable1=null)
    {
        echo "<h1> This is simple Constructor</h1>";
        $this->simpleVariable = $variable1;
        // echo "<br>";
        // echo SimpleClass::CONST_VALUE;
        // echo "<br>";
        // echo self::CONST_VALUE;
        echo "<br>";
        // echo self::$thisIsStaticVarable;
    }
    public function function1()
    {
        print ("This is Function 1");
    }

    public function function2($variable1)
    {
        echo "Before Value Set: {$this->simpleVariable} <br>";
        echo "Setting Value Now...<br>";
        $this->simpleVariable=$variable1;
        echo "<br>";
        print ("This is function 2");
        echo "<br>";
        echo "Param data: ".$variable1;
    }

    public function setterOne($variable)
    {
        $this->privateVariable = $variable;
    }

    public function getterOne()
    {
        // self::$thisIsStaticVarable;
        // self::simpleStaticFunction();
        return $this->privateVariable;
    }

    public static function simpleStaticFunction()
    {
        echo "<h2> Static Function </h2>";
    }

    function __destruct()
    {
        echo "<h3>Destructor</h3>";
    }
}
// SimpleClass::CONST_VALUE,
// SimpleClass::$thisIsStaticVarable=1000;
// print(SimpleClass::simpleStaticFunction());

// $object1 = new SimpleClass(20);
$object1 = new SimpleClass();
// $object1->function1();
// $object1->function2(50);
$inputedData= $_POST["user_value"];
$object1->setterOne($inputedData);
echo "<br>".$object1->getterOne();
// print($object1->simpleVariable);

// $object2 = new SimpleClass(10);
// $object1->setterOne(100);
// $object2->setterOne(variable: 50);
// print ($object2->getterOne());

// print ($object1->getterOne());
// // $object1->simpleStaticFunction();
// SimpleClass::simpleStaticFunction();

?>