<?php
    require 'dbconnection.php';
    if(isset($_SESSION['email']))
    {
        $email=$_SESSION['email'];
        $query = "SELECT name FROM users WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">

    <!-- styles.css -->
    <link rel="stylesheet" href="css/styles.css">

    <title>Home</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-primary mb-0" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php">Diapsi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php                 
                    if (isset($_SESSION['email'])) 
                    {                     
                ?> 
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                    Welcome,
                    <?php 
                        while ($row = $result->fetch_assoc()) {
                            echo $row['name']."!";
                        }
                    ?>
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="my-courses.php">My Courses <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Log out <span class="sr-only">(current)</span></a>
                </li>   
                <?php
                    }else
                    {
                ?>  
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="signup.php">Sign Up <span class="sr-only">(current)</span></a>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </nav>
   <?php
         $search=$_GET["search"];
         $course=$_GET["course"];
         $sql="SELECT * FROM $course WHERE MATCH(question) AGAINST ('%" . $search . "%')";
         $run=mysqli_query($con,$sql) or die(mysqli_error($con));
         $foundNum=mysqli_num_rows($run);
         if($foundNum==0){
             echo "Sorry! we don't have the answer to your question, We'll try to post the answer within 24 hours.";
             $insertQuery="insert into queries (question) VALUE ('$search, $course')";
             $run=mysqli_query($con,$insertQuery) or die(mysqli_error($con));
         } else
             {
             echo "<h1>$foundNum results found for your query $search</h1>";
             $getQuery=mysqli_query($con,$sql);
             while($runRows=mysqli_fetch_array($getQuery)){
                 echo $runRows['question'];   
             }

        }
   ?>





    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
    crossorigin="anonymous"></script>

</body>
</html>