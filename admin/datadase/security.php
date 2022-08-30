<?php
session_start();
include('datadase/dbconfig.php');

if($connection)
{
    // echo "Database Connected";
    
}
else
{
    header("Location: datadase/dbconfig.php");
}
if(!$_SESSION['username'])
{
    header('Location: login.php');
}
?>