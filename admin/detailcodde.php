<?php 
include('security.php');
$connection = mysqli_connect("localhost","root","","bookstore");

if(isset($_POST['updatebtn1']))
{
    $Username = $_POST['edit_username'];
    $Location = $_POST['edit_Location'];
    $Age = $_POST['edit_Age'];
    $Gender = $_POST['edit_Gender'];
    $Password = $_POST['edit_Password'];

    $query = "UPDATE users SET Username='$Username', Location='$Location', Age='$Age', Gender='$Gender',Password='$Password' WHERE Username='$Username' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Accpet";
        $_SESSION['status_code'] = "success";
        header('Location: cartaad.php'); 
    }
    else
    {
        $_SESSION['status'] = "Decline";
        $_SESSION['status_code'] = "error";
        header('Location: cartaad.php'); 
    }
}
?>