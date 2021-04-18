<?php 

    $conn = mysqli_connect('localhost','root','','gallerymanagement');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if($name && $email && $phone){

        mysqli_query($conn, "INSERT INTO booking (name, email, phone) VALUES ('$name', '$email', '$phone')");

        header("location: bookingform.php?result=success");

    }else{

        header("location: bookingform.php?result=failed");

    }

?>