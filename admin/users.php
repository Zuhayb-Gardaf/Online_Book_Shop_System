<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary"> Users  </h5>
  </div>

  <div class="card-body">

    <?php 
    if (isset($_SESSION['success'])&& $_SESSION['success'] !='')
    {
        echo'<h2 class ="bg-rpimary"> '.$_SESSION['success'].' </h2>';
        unset($_SESSION['success']);

    }
    if (isset($_SESSION['status'])&& $_SESSION['status']!='')
    {
        echo'<h2 class ="bg-rpimary"> '.$_SESSION['status'].' </h2>';
        unset($_SESSION['status']);

    }
    ?>
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

            </div>
        </div>
    </div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>