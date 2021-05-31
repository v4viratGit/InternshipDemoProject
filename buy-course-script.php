<?php

require 'dbconnection.php';

if(isset($_POST['buy']))  
{  
    $users_email=$_SESSION['email'];
    $course_name=$_POST['course_name']; 
    $course_link=$_POST['course_link']; 
    $course_amount=$_POST['course_amount'];
    $current_date_query="SELECT CURRENT_DATE()";
    $current_date_result=mysqli_query($con,$current_date_query)or die(mysqli_error($con));
    while ($current_date_row = mysqli_fetch_array($current_date_result)) {
       $current_date=$current_date_row[0];
    }
    $expiry_date_query="SELECT ADDDATE('$current_date', INTERVAL 74 DAY)";
    $expiry_date_result=mysqli_query($con,$expiry_date_query)or die(mysqli_error($con));
    while ($expiry_date_row = mysqli_fetch_array($expiry_date_result)) {
        $expiry_date=$expiry_date_row[0];
     }
    $insert="insert into purchases (users_email,course_name,course_link,course_amount,expiry) VALUE ('$users_email','$course_name','$course_link','$course_amount','$expiry_date')";
    if(mysqli_query($con,$insert)or die(mysqli_error($con)))  
    {  
        $_SESSION['course']=$course_name;
        header("location:checkout.php");
    }  
  
}

