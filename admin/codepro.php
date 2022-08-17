<?php 

$connection = mysqli_connect("localhost","root","","bookstore");

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

    $PID = "SELECT * FROM products WHERE PID='$PID' ";
    $PID = mysqli_query($connection, $PID_query);
    if(mysqli_num_rows($PID_query_run) > 0)
    {
        $_SESSION['status'] = "PID Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: addbooks.php');  
    }
    else
    {
        if($MRP ===  $page )
        {
            $query = " INSERT INTO products (PID,Title,Author,MRP,Price,Discount,Available,
            Publisher,Edition,Category,Language, page,weight) 
            VALUES ('$PID','$Title','$Author','$MRP','$Price','$Discount','$Available','$Publisher',
            '$Edition','$Category','$Language','$page','$weight' )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
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
        else 
        {
            $_SESSION['status'] = "MRP and page Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: addbooks.php');  
        }
    }

}
?>