<?php

// DataBase info

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

echo "<h2> Student Info </h2>";

$get_attendence_info="SELECT * FROM attendence order by id DESC";
$result = $conn->query($get_attendence_info);

// print_r($result);

if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["st_name"]. "- Reg No: ". $row["reg_no"]."- Attendence: " . $row["attendance"]. " -Semester: ".$row["semester"]."<form action='/batch_50_b_eve/update_student_form.php' method='GET'> <input type='hidden' name='id' value='".$row["id"]."'> <button type='submit'>Edit</button></form><br>";
  }

} else {
  echo "0 results";
}

$conn->close();
?>

<!-- <form action='/batch_50_b_eve/update_student_form.php' method='GET'>
    <input type='hidden' name='id' value=''> 
    <button type='submit'>Edit</button>
</form> -->

