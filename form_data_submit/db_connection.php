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

echo "Connection Success <br>";


// echo "Name: ".$_POST['st_name'];
// echo "<br> ID: ".$_POST['st_id'];
// echo "<br> Semester: ".$_POST['semester'];

$st_name=$_POST['st_name'];
$st_id=$_POST['st_id'];
$semester=$_POST['semester'];

$sql="INSERT INTO student_info (st_name, st_id,semester) values('".$st_name."','".$st_id."','".$semester."')";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "<br> New record created successfully ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql_read_data="SELECT * FROM student_info Order by id DESC";
 
$result = $conn->query($sql_read_data);

// print_r($result);

if ($result->num_rows > 0) {
  // output data of each row
  // echo "Data Found";
  while($row = $result->fetch_assoc()) {

    // print_r($row);
    // echo "".$row['id']."<br>";
    // echo $row["st_name"];

    echo " ST ID: ".$row['id']." ST Name: ".$row["st_name"]." ST REG NO:  ".$row["st_id"]." Semester: ".$row["semester"]." <br>";

    // echo "id: " . $row["id"]. " - Name: " . $row["st_name"]. "- Reg No: ". $row["reg_no"]."- Attendence: " . $row["attendance"]. " -Semester: ".$row["semester"]."<form action='/batch_50_b_eve/update_student_form.php' method='GET'> <input type='hidden' name='id' value='".$row["id"]."'> <button type='submit'>Edit</button></form><br>";
  }

} else {
  echo "0 results";
}


$conn->close();
?>

