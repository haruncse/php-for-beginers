<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h1>Update Student Info Form</h1>

<!-- Data  Save using form Start-->
<form action="/batch_50_b_eve/update_student_info.php" method="POST">
    <?php
    echo  '<input readonly type="text" value="'.$_GET['id'].'" placeholder="id" name="id">';
    ?>
    
    <input type="text" placeholder="Name" name="st_name">
    <input type="text"  placeholder="Reg No" name="reg_no">
    <input type="text"  placeholder="Attendence" name="attendence">
    <input type="text"  placeholder="Semester" name="semester">
    <button type="submit"> Submit</button>
</form>
<!-- Data  Save using form END-->
</body>
</html>