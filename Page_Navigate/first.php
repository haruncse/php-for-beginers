<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="second.php">
        <label>Name</label>
        <input type="text" name="user_name">

        <Label>ID</Label>
        <input type="text" name="user_id">

        <input type="submit" value="submit">

    </form>


    <?php

    echo "<h1> First Page </h1>";

    echo "<a href='/php-for-beginers/test/simple1.php'> Click Here </a>";

    ?>
</body>

</html>