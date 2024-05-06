<?php

    include 'config.php';

    if(isset($_POST['signUp'])){
        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $PASSWORD=$_POST['password'];
        $PASSWORD=md5($PASSWORD);


        $checkEmail="SELECT * FROM users where email='$Email'";
        $result=$conn->query($checkEmail);
        if($result->num_rows>0){
            echo "Email is used!";
        }
        else{
            $insertQuery="INSERT INTO users(Name,Email,PASSWORD) VALUES ('$Name' ,'$Email','$PASSWORD')";
            
                if($conn->query($insertQuery)==TRUE){
                    header("location: index.php");
                }
                else{
                    echo "Error 404:".$conn->error;
                }
        }

    }


    if(isset($_POST['logIn'])){
        $Email=$_POST['email'];
        $PASSWORD=$_POST['password'];
        $PASSWORD=md5($PASSWORD);

        $sql="SELECT * FROM users WHERE email='$Email' and password='$PASSWORD'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['Email'];
            header("location: home.php");
            exit();
        }
        else{
            echo "Incorret Email or Password";
        }
    }

?>