<?php
class TestClass
{
    public $variable1 = "I am Variable 1";
    public $variable2 = "I am Variable 2";

    const CONST_VALUE = 34;
    public static $thisIsStaticVarable = "500";

    function __construct( $variable1 = null, $variable2 = null)
    {
        echo "<h1> This is Constructor</h1>";
        $this->variable1 = $variable1;
        $this->variable2 = $variable2;
    }
    public function function1()
    {
        echo "<br>";
        echo "This is function 1";
        echo "<br>";
        echo "Variable 1: " . $this->variable1;
        echo "<br>";
        echo "Variable 2: " . $this->variable2;
        echo "<br>";
        echo "Constant Value: " . self::CONST_VALUE;
        echo "Constant Value: " . TestClass::CONST_VALUE;
        echo "<br>";
        echo "Static Variable: " . self::$thisIsStaticVarable;
    }

    public function function2($variable1)
    {
        echo "This is function 2";
        echo "<br>";
        echo "Param data: " . $variable1;
    }

    private function privateFunction()
    {
        echo "This is Private Function";
    }
    protected function protectedFunction()
    {
        echo "This is Protected Function";
    }

    public static function simpleStaticFunction()
    {
        echo "<h2> Static Function </h2>";
    }

    function __destruct()
    {
        echo "<h3>Destructor</h3>";
        self::simpleStaticFunction();
        TestClass::simpleStaticFunction();
    }
}


$simpleObject = new TestClass("Value 1", "Value 2"  );
$simpleObject->function1();

echo "<br>";
echo "This is constant value: " . TestClass::CONST_VALUE;
echo "<br>";
echo "This is static variable: " . TestClass::$thisIsStaticVarable;
  TestClass::simpleStaticFunction();
// $simpleObject->function2("Hello, World!");
?>