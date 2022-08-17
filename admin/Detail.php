<?php
include('includes/header.php'); 
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/Detail.css">
</head>
<body class="home" style="text-decoration: none;">
  <div class="pricing-table">
    <div class="pricing-card">
      <h1 class="pricing-card-header">User </h1>
      <div class="price"><sup></sup>User<span>Informattion</span></div>
      <div class="card-body">

    
<?php
          $connection = mysqli_connect("localhost","root","","bookstore");
           
        if(isset($_POST['Detail_btn']))
            {
                $UserName = $_POST['Detail_username'];
                
                $query = "SELECT * FROM users WHERE UserName='$UserName' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="detailcodde.php" method="POST">

                        <div class="form-group">
                                <label> Username </label>
                                <input type="email" name="edit_username" value="<?php echo $row['UserName'] ?>" class="form-control"
                                   readonly>
                            </div>

                            <div class="form-group">
                                <label> Location </label>
                                <input type="text" name="edit_Location" value="<?php echo $row['Location'] ?>" class="form-control"
                                   readonly>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="edit_Age" value="<?php echo $row['Age'] ?>" class="form-control"
                                    placeholder="Enter Email" readonly>
                            </div>
                           <div class="form-group">
                                <label> Gender </label>
                                <input type="text" name="edit_Gender" value="<?php echo $row['Gender'] ?>" class="form-control"
                                     readonly>
                            </div>
                             <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="edit_Password" value="<?php echo $row['Password'] ?>"
                                    class="form-control" readonly>
                            </div>
                            

                            <a href="cartaad.php" class="btn btn-danger"> Decline </a>
                            <button type="submit" name="updatebtn1" class="btn btn-primary"> Accept </button>

                        </form>
                        <?php
                }
            }
        ?>
       
    </div>
      <a href="#" class="order-btn">Order Now</a>
    </div>

    
  </div>
</body>
</html>

    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>


<?php
          $connection = mysqli_connect("localhost","root","","bookstore");
           
        if(isset($_POST['Detail_btn']))
            {
                $UserName = $_POST['Detail_username'];
                
                $query = "SELECT * FROM users WHERE UserName='$UserName' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                        <div class="form-group">
                                <label> Username </label>
                                <input type="email" name="edit_username" value="<?php echo $row['UserName'] ?>" class="form-control"
                                   readonly>
                            </div>

                            <div class="form-group">
                                <label> Location </label>
                                <input type="text" name="edit_Location" value="<?php echo $row['Location'] ?>" class="form-control"
                                   readonly>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="edit_Age" value="<?php echo $row['Age'] ?>" class="form-control"
                                    placeholder="Enter Email" readonly>
                            </div>
                           <div class="form-group">
                                <label> Gender </label>
                                <input type="text" name="edit_Gender" value="<?php echo $row['Gender'] ?>" class="form-control"
                                     readonly>
                            </div>
                             <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="edit_Password" value="<?php echo $row['Password'] ?>"
                                    class="form-control" readonly>
                            </div>
                            

                            <a href="cartaad.php" class="btn btn-danger"> decline </a>
                            <button type="submit" name="updatebtn1" class="btn btn-primary"> Accept </button>

                        </form>
                        <?php
                }
            }
        ?>