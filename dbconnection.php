<?php
session_start();
ob_start();
$con= mysqli_connect("localhost", "root", "", "internshipdemoproject") or die(mysqli_error($con));