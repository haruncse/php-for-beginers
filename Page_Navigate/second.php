<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Second Page</h1>

    <?php

    $userName = $_POST['user_name'];
    echo "User Name: ".$userName;

    $userId = $_POST['user_id'];
    echo "<br> ID: ".$userId;

    ?>
</body>
</html>