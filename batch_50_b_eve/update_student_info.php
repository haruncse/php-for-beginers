<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "50_b_eve_batch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<h2> Update Student Info </h2>";

$id=$_POST['id'];
$name=$_POST['st_name'];
$reg_no= $_POST['reg_no'];
$attendence= $_POST['attendence'];
$semester= $_POST['semester'];

//SELECT * FROM attendence where id=20;
$result = $conn->query("SELECT * FROM attendence where id=".$id);

// print_r($result);

if ($result->num_rows == 0) {
    echo "Record ".$id." can not be updated <br>";
    die();
}

$update_attendence_info="UPDATE attendence set st_name='".$name."',reg_no='".$reg_no."',attendance='".$attendence."',semester='".$semester."' where id=".$id."";

if ($conn->query($update_attendence_info) === TRUE) {
    echo "Record ".$id." updated successfully <br>";
} 
else {
    echo "Error: " . $update_attendence_info . "<br>" . $conn->error;
}


$conn->close();
?>