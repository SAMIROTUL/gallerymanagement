<?php

    $conn = mysqli_connect('localhost','root','','gallerymanagement');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_data = mysqli_query($conn, "SELECT * FROM user_info where email= '$email'");

    $email_num = mysqli_num_rows($email_data);

    if($email_num == 1){

        header("location: register.php?result=failed");

    }else{

        if($name && $email && $password){

            mysqli_query($conn, "INSERT INTO user_info (name, email, password) VALUES ('$name','$email','$password')");
    
            header("location: register.php?result=success");
    
        }else{
    
            header("location: register.php?result=failed");
    
        }

    }

?>