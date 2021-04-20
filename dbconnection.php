<?php
session_start();
ob_start();
$con= mysqli_connect("localhost", "root", "", "internshipdemoprojectdb") or die(mysqli_error($con));