<?php

require '/home/vol1_5/epizy.com/epiz_24827857/htdocs/common.php';

if(isset($_POST['signup']))  
{  
    $user_name=$_POST['name']; 
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];  
    $user_contact=$_POST['contact'];
    
  
  
    if($user_name=='')  
    {  
        echo"<script>alert('Please enter the name')</script>";  
        exit();
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
        exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
        exit();  
    }  
     if($user_contact=='')  
    {  
        echo"<script>alert('Please enter the contact number')</script>";  
        exit();
    }  
  

    $check_email="select * from users WHERE email='$user_email'";  
    $run=mysqli_query($con,$check_email); 
    
  
    if(mysqli_num_rows($run)>0)  
    {  
echo "<script>alert('Email $user_email already exists in our database, Please try another one!')</script>";  
exit();  
    }  
    $insert_user1="insert into users (name,password,email,contact) VALUE ('$user_name','$user_pass','$user_email','$user_contact')";
    if(mysqli_query($con,$insert_user1))  
    {  
        $_SESSION['user_id'] = $user_email;
        $_SESSION['email'] = $user_email;
        header('location: index.php');
    }  
  
}

