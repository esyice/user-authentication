<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form action="form.php" method="post" class="login">
            <div class="uname">
                <label for="email">Email</label>
                <input type="email" name="email" autocomplete="off" required>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" autocomplete="off" required>
            </div>
            <div class="loginbtm">
                <input type="submit" value="Log in" name="logIn">
            </div>
            <div class="signin">
                dont have account? <button><a href="register.php">Sign Up</a></button>
            </div>
        </form>
        


    </div>
</body>
</html>