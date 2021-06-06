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
                    <a class="nav-link" href="user.php">
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
    <!-- Banner -->
    <div id="Banner">
        <div id="Banner-content" class="border border-primary">
                <h1>Learn on your schedule Study any topic, anytime.</h1>
                <strong>Explore thousands of courses starting at ₹455 each.</strong>
        </div>
    </div>
    <br>
    <br>
    <!-- Search bar -->
    <div class="container">
        <form action="search.php" method="GET">
            <input name="search" type="search" placeholder="Get the answers to your questions here" aria-label="Search">
            <label for="NEET">
                NEET
                <input type="radio" id="NEET" name="course" value="NEET">
              </label>
              <label for="JEE">
                JEE
                <input type="radio" id="JEE" name="course" value="JEE">
              </label>
              <label for="UPSC">
                UPSC
                <input type="radio" id="UPSC" name="course" value="UPSC">
              </label>
              <label for="CA">
                CA
                <input type="radio" id="CA" name="course" value="CA">
              </label>
              <label for="CS">
                CS
                <input type="radio" id="CS" name="course" value="CS">
              </label>
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="container">
        <!-- Courses -->
        <h1>The world's largest selection of courses</h1>
        <strong>Choose from 130,000 online video courses with new additions published every month</strong>
        <!-- Courses cards -->>    
        <div class="row row-cols-2 row-cols-md-4">
        <div class="col mb-4">
            <div class="card">
            <img src="images/NEET-card.jpg" class="card-img-top" alt="course1">
            <div class="card-body">
                <h5 class="card-title">NEET</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="neet-course.php" class="btn btn-primary">Buy now</a>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="images/JEE-card.jpg" class="card-img-top" alt="course2">
            <div class="card-body">
                <h5 class="card-title">JEE</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="jee-course.php" class="btn btn-primary">Buy now</a>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="images/UPSC-card.jpg" class="card-img-top" alt="course3">
            <div class="card-body">
                <h5 class="card-title">UPSC</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Buy now</a>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="images/CAT-card.jpg" class="card-img-top" alt="course4">
            <div class="card-body">
                <h5 class="card-title">CAT</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Buy now</a>
            </div>
            </div>
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