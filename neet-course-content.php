<?php
    require 'dbconnection.php';
    
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
            <video class="p-4" id="homevideo" width="50%" autoplay  controls onended="run()">
                <source src="" type='video/mp4'/>
            </video>    
            <div class="card-body">
            <button  type="button"  class="btn btn-primary btn-md"  onclick="myfunction('v1.mp4')" style="padding:0 34px 0 34px;">content</button><br><br>

            <button type="button"  class="btn btn-primary btn-md" onclick="myfunction('v2.mp4')" id="m2" style="padding:0 23px 0 23px;" disabled>about neet</button><br><br>
            <button type="button"  class="btn btn-primary btn-md" onclick="myfunction('v3.mp4')"  id="m3" style="padding:0 15px 0 15px;"  disabled>exam pattren</button><br><br>
                <h5 class="card-title">Welcome to our NEET course</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquam accumsan nisi laoreet pellentesque. Donec in fermentum est. Maecenas sit amet massa risus. Morbi cursus ex vitae ipsum tempor iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla convallis tristique pretium. Cras varius pharetra magna nec commodo. Morbi risus ex, suscipit sed lorem sed, gravida convallis augue. Sed tristique ultricies justo, vehicula faucibus elit accumsan a. Sed eget feugiat risus, non aliquam enim. Nulla varius mi vitae placerat feugiat. Mauris condimentum risus eros, ut imperdiet orci volutpat et. Fusce bibendum cursus lacus, eget scelerisque nisi commodo ornare. Aliquam sed eros eu magna imperdiet auctor non at neque. Morbi fermentum porta tortor, ut aliquet lacus bibendum in. Pellentesque arcu orci, sodales ut porta vel, bibendum a quam.</p>
                <p class="card-text"><small class="text-muted">Last updated 2021</small></p>
            </div>
        </div>
    </div>


    <!-- Javascript Logic -->
    <script>
        // var List = ["v1.mp4", "v2.mp4", "v3.mp4"]
        // count = 0;
        // Player = document.getElementById("homevideo");
        // function run(){
        //     count++;
        //         if (count == List.length) 
        //             count = 0;
        //             var nextVideo = List[count];
        //             Player.src = "videos/"+nextVideo;
        //             Player.play();
        // };
        var videosList = ["v1.mp4","v2.mp4", "v3.mp4"]
    
    var i,j,video_count;
    var videoPlayer = document.getElementById("homevideo");
function myfunction(b){
for(i=0;i<videosList.length;i++)
{
    if(videosList[i]===b)
    {
        video_count=i;
        break;
    }
}
videoPlayer.src="videos/"+videosList[video_count];
videoPlayer.play();

//videoPlayer.pause();

}
function run(){
    video_count++;
    if (video_count == videosList.length) 
      video_count = 0;
    var nextVideo = videosList[video_count];
    if(nextVideo==='v2.mp4')
    {
        document.getElementById("m2").disabled=false;
    }
    else if(nextVideo==='v3.mp4')
    {
        document.getElementById("m3").disabled=false;
    }
    else if(nextVideo==='v4.mp4')
    {
        document.getElementById("m4").disabled=false;
    }
    videoPlayer.src = "videos/"+nextVideo;
   videoPlayer.load();
    videoPlayer.play();
 };
  
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
    crossorigin="anonymous"></script>

</body>
</html>