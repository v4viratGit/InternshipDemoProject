<?php
require 'dbconnection.php';
if (!(isset($_SESSION['email']))) 
    {   
        header('location: login.php'); 
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
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="signup.php">Sign Up <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Log out <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Content -->
    <div class="container mt-3">
        <div class="card mb-3">
            <img class="card-img-top" height="350px" src="images/NEET-course.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Welcome to our NEET course</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquam accumsan nisi laoreet pellentesque. Donec in fermentum est. Maecenas sit amet massa risus. Morbi cursus ex vitae ipsum tempor iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla convallis tristique pretium. Cras varius pharetra magna nec commodo. Morbi risus ex, suscipit sed lorem sed, gravida convallis augue. Sed tristique ultricies justo, vehicula faucibus elit accumsan a. Sed eget feugiat risus, non aliquam enim. Nulla varius mi vitae placerat feugiat. Mauris condimentum risus eros, ut imperdiet orci volutpat et. Fusce bibendum cursus lacus, eget scelerisque nisi commodo ornare. Aliquam sed eros eu magna imperdiet auctor non at neque. Morbi fermentum porta tortor, ut aliquet lacus bibendum in. Pellentesque arcu orci, sodales ut porta vel, bibendum a quam.</p>
                <p class="card-text"><small class="text-muted">Last updated 2021</small></p>
                <a href="billing-info-NEET.php" class="btn btn-primary">Buy now</a>
            </div>
        </div>
    </div>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
    crossorigin="anonymous"></script>

</body>
</html>