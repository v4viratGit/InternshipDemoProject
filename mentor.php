<?php
$email=$_POST['email'];
$number=$_POST['number'];
$fname=$_POST['fname'];
$conn = mysqli_connect("localhost","root","","internshipdemoprojectdb");
//$conn = new mysqli("localhost","root","","internshipdemoprojectdb");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mentorship  VALUES ('$email','$number','$fname')";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">'; 
       // echo 'window.location.href = "neet-course-content.php";';
       echo 'alert("You have successfully applied for mentornship, please continue with your learning.");';
       echo 'close();';
        echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>