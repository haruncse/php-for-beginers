<?php
class TestClass
{
    public $variable1 = "I am Variable 1";
    public $variable2 = "I am Variable 2";
    function __construct()
    {
        echo "<h1> This is Constructor</h1>";
    }
    public function function1()
    {
        echo "<br>";
        echo "This is function 1";
        echo "<br>";
        echo "Variable 1: ".$this->variable1;
        echo "<br>";
    }

    public function function2($variable1)
    {
        echo "This is function 2";
        echo "<br>";
        echo "Param data: ".$variable1;
    }

    function __destruct()
    {
        echo "<h3>Destructor</h3>";
    }
}


$simpleObject=new TestClass();
$simpleObject->function1();
// $simpleObject->function2("Hello, World!");
?>