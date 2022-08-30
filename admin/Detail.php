<?php
include('datadase/security.php');
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
<body class="home" ">
  <div class="pricing-table">
    <div class="pricing-card">
      <h1 class="pricing-card-header">User </h1>
      <div class="price"><sup></sup>User<span>Informattion</span></div>
      <div class="card-body">

    
      <div class="table-responsive">
            <?php
            $connection = mysqli_connect("localhost","root","","bookstore");
                $query = "SELECT * FROM users";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Username </th>
                            <th> Location </th>
                            <th> Age </th>
                            <th> Gender </th>
                            <th> Password </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['UserName']; ?></td>
                                <td><?php  echo $row['Location']; ?></td>
                                <td><?php  echo $row['Age']; ?></td>
                                <td><?php  echo $row['Gender']; ?></td> 
                                <td><?php  echo $row['Password']; ?></td>
                            
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
               <a href="#" class="order-btn">Decline</a>
               <a href="#" class="order-btn">Accpet</a>
            </div>
        </div>
       
    </div>
      
    </div>

    
  </div>
</body>
</html>

    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>