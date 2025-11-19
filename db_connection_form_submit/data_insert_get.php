<?php

// DataBase info

$servername = "127.0.0.1";  //localhost
$username = "root";
$password = "";
$dbname = "uu_cse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}else{
  echo"Connection Success";
}


$name=$_POST['st_name'];
$reg_no= $_POST['reg_no'];
$attendence= $_POST['attendence'];
$semester= $_POST['semester'];

$sql = "INSERT INTO attendence (st_name, reg_no,attendance,	semester) VALUES ('{$name}', '".$reg_no."','".$attendence."','".$semester."')";

/*
  $sql = "INSERT INTO attendence (st_name, roll) VALUES ('".$name."', '".$roll."')";
  INSERT INTO student_info (st_name, roll,result) VALUES ('Mahfuz', '1091000',3.5);
*/

// $conn->query($sql)

if ($conn->query($sql) === TRUE) {
  echo "<br> New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<h2> Student Info </h2>";

$get_attendence_info="SELECT * FROM attendence order by reg_no DESC";

$result = $conn->query($get_attendence_info);

// print_r($result);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["reg_no"]. " - Name: " . $row["st_name"]. "- Reg No: ". $row["reg_no"]."- Attendence: " . $row["attendance"]. " -Semester: ".$row["semester"]." <br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>