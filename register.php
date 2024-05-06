<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>REGISTER</title>
</head>
<body>

    <div class="form" >
            <form action="form.php" method="post" class="signup"> 
                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" autocomplete="off" required>
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" autocomplete="off" required>
                </div>
                <div class="register">
                    <input type="submit" value="Sign Up" name="signUp">
                </div>
                <div class="loginbtm">
                    have a account? <button><a href="index.php">Log in</a></button>
                </div>
            </form>
    </div>
    
</body>
</html>