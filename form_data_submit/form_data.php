<?php 

echo "<h1> This is submited form </h1>";

// echo "Name: ".$_GET['st_name'];
// echo "<br> ID: ".$_GET['st_id'];
// echo "<br> Semester: ".$_GET['semester'];

echo "Name: ".$_POST['st_name'];
echo "<br> ID: ".$_POST['st_id'];
echo "<br> Semester: ".$_POST['semester'];

$data=[];

// session()->put("User_info",$data);

/*
    $value1=$_GET['st_name'];
    $value2=$_GET['st_id'];
    $result=$value1+$value2;
    echo $result;
*/

?>