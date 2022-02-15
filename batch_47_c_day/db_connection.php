<?php
//DB Connection

$server_name="localhost";
// $server_name="127.0.0.1";

$db_user_name="root";
$db_password="";
$db_name="47_c_day_batch";

$conn = new mysqli($server_name, $db_user_name, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connection Success";


echo "Name: ".$_POST['st_name'];
echo "<br> ID: ".$_POST['st_id'];
echo "<br> Semester: ".$_POST['semester'];

// $sql="INSERT into student_info (st_name, st_id,semester) values(''.$_POST['st_name'],"".$_POST['st_id'],$_POST['semester'])";
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully <br>";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>