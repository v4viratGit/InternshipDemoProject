<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
session_destroy();
header('Location: index.php');
exit;