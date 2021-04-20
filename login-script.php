<?php

require 'dbconnection.php';

if (isset($_POST['email']) and isset($_POST['pass']))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
    if ($count == 1){
    $_SESSION['user_id'] = $email;
    $_SESSION['email'] = $email;
    header('location: index.php');
    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";   
    }
}
