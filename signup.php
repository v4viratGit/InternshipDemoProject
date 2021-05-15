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
                    <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sign Up <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Login form -->
    <div class="container mt-5">
        <div class="card text-center border-primary">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="signup-script.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                         <input type="text" name="contact" class="form-control" placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <input type="file" name="profilePhoto" id="profilePhoto">
                    <div>
                        <button name="signup" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                Please enter details correctly
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