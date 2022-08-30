<?php 
session_start();
include_once("config.php");

if(isset($_POST['bookbtn']))
{
    $PID = $_POST['PID'];
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $MRP = $_POST['MRP'];
    $Price = $_POST['Price'];
    $Discount = $_POST['Discount'];
    $Available = $_POST['Available'];
    $Publisher = $_POST['Publisher'];
    $Edition = $_POST['Edition'];
    $Category = $_POST['Category'];
    $Language = $_POST['Language'];
    $page = $_POST['page'];
    $weight = $_POST['weight'];
    $query=mysqli_query($con, " insert into products (PID,Title,Author,MRP,Price,Discount,Available,
            Publisher,Edition,Category,Language, page,weight) 
            VALUES ('$PID','$Title','$Author','$MRP','$Price','$Discount','$Available','$Publisher',
            '$Edition','$Category','$Language','$page','$weight')");

            if($query)
            {
                
                $_SESSION['status'] = "Book Is  Added";
                $_SESSION['status_code'] = "success";
                header('Location: addbooks.php');
            }
            else 
            {
                $_SESSION['status'] = "Book Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: addbooks.php');  
            }
        }
        
 
?>
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$gender=$_POST['gender'];
	$education=$_POST['education'];
	$adress=$_POST['addrss'];
	$query=mysqli_query($con,"insert into data(name,email,contactno,gender,education,address) values('$name','$email','$contactno','$gender','$education','$adress')");
