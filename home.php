<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>HOME</title>
</head>
<body>
    <div class="box">
        <div class="inbox">
            <p>Welcome <b>User</b></p>
        </div>
        <div class="inbox">
            <p>You have successfully logged in</p>
        </div>
        <div class="inbox">
            <p>Your email is 123@gmail.com</p>
        </div>
        <div class="btm">
            <a href="index.php"><button>Log out</button></a>
        </div>
    </div>

    <?php
        if(isset($_SESSION['email'])){
            $Email=$_SESSION['email'];
            $query=mysqli_query($conm, "SELECT users.*FROM 'users' WHERE users.email='$Email");
            while($row=mysqli_fetch_array($query)){
                echo $row['name'].''.$row['email'];
            }
        }
    ?>
    :)
</body>
</html>