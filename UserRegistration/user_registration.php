<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registration_success.php" method="POST">
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="text" name="email" required>
        </div>
        <div>
            <label for="mobile">Phone</label>
            <input id="mobile" type="text" name="mobile" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="passord" name="password" required>
        </div>
        <div>
            <label for="confirm_passord">Confirm Password</label>
            <input id="confirm_passord" type="password" name="confirm_passord" required>
        </div>
        <input type="submit" value="User Registration">
    </form>
</body>
</html>