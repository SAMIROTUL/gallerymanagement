<?php 

    session_start();

    $conn = mysqli_connect('localhost','root','','gallerymanagement');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_data = mysqli_query($conn, "SELECT * FROM user_info where email= '$email' and password= '$password'");

    $user_num = mysqli_num_rows($user_data);

    if($user_num == 1){

        header("location: homepage.php");

    }else{

        header("location: signin.php");

    }

?>