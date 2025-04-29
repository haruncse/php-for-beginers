<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>  This is from PHP File outside PHP Tag </h1>

    <?php
    
    echo "<h3> This is inside PHP Tag </h3>";

    $variable1 = 40;
    $variable2 = 50;

    print("Value 1: ".$variable1." Value 2: ".$variable2);

    echo "<br> addition <br>";
    print $variable1 + $variable2;
    echo "<br>substraction <br>";
    print $variable1 - $variable2;
    echo "<br>multiplications <br>";
    print $variable1 * $variable2;
    echo "<br> Divission <br>";
    print $variable1 / $variable2;

    $extraVariable = $variable1 - $variable2;
    echo "<br>";
    if(   $extraVariable  > 0){

        print("Positive");

    }else{
        print("Negative");
    }
    
    echo "<br>";
    define("CONST_VARIABLE",30);
    echo CONST_VARIABLE;

    switch ($extraVariable) {
        case $extraVariable >0:
            print("Positive");
            break;
        case $extraVariable < 0:
            print("Negative");
            break;
        default:
            print("Zero");
            break;
    }

    ?>

</body>
</html>