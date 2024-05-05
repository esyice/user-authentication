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


        <?php

            include("php/config.php");
            if(isset($_POST['submit'])){
                $username = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");


                if(mysqli_num_rows($verify_query) !=0){
                    echo    "<div class= 'message'>
                            <p> This Email is used.</p>
                        </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btm'> Go Back</button></a>";
                }
                else{
                    mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Error 404");
                    echo    "<div class= 'message'>
                            <p>Registation Successfully!.</p>
                        </div> <br>";
                    echo "<a href='index.php'><button class='btm'>Log in</button></a>";

                }

            }else{



        ?>
            <form action="" method="$_POST" class="signup"> 
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
                    <input type="submit" value="Sign In">
                </div>
                <div class="loginbtm">
                    have a account? <button><a href="index.php">Log in</a></button>
                </div>
            </form>
        <?php } ?>
    </div>
    
</body>
</html>