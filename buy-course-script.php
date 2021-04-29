<?php

require 'dbconnection.php';

if(isset($_POST['buy']))  
{  
    $users_email=$_SESSION['email'];
    $course_name=$_POST['course_name']; 
    $course_description=$_POST['course_description'];
    $course_link=$_POST['course_link']; 
    $course_amount=$_POST['course_amount'];

    $insert="insert into purchases (users_email,course_name,course_description,course_link,course_amount) VALUE ('$users_email','$course_name','$course_description','$course_link','$course_amount')";
    if(mysqli_query($con,$insert))  
    {  
        header("location:checkout.php");
    }  
  
}

