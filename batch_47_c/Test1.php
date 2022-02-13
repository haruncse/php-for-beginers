
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>This is html</h3>
<label for="value_1">Value 1</label>
<input id="value_1" type="text">
<button> Submit </button>

    <?php 

    global $valiable_1;
    global $variable_2;

    function TestFuction()
    {
        static $aa=30;

        $valiable_1=20;
        $variable_2=30;
        $result= $valiable_1 + $variable_2;
        // print "Result: ".$result;

    }

    TestFuction();

    function TestDivision($value1,$value2)
    {
        $result= $value1 / $value2;
        print "Result: ".$result;

    }

    TestDivision(30,5);

    echo "<h1> Test From Server. Hello Batch 47 C <h1>";
    // print ("Test From Server. Hello Batch 47 C");
    ?>
</body>
</html>

