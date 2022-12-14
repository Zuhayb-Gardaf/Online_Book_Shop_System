<?php
include('datadase/security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary"> Custmer </h5>
  </div>

  <div class="card-body">

            <div class="table-responsive">
            <?php
            $connection = mysqli_connect("localhost","root","","bookstore");
                $query = "SELECT * FROM cart";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th > Customer </th>
                            <th> Product  </th>
                            <th>Quantity </th>
                            <th>Detail</th>
                            <!-- <th>Delivery</th> -->
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
                                <td><?php  echo $row['Customer']; ?></td>
                                <td><?php  echo $row['Product']; ?></td>
                                <td><?php  echo $row['Quantity']; ?></td>
                                <td>
                                <form action="Detail.php" method="post">
                                        <input type="hidden" name="Detail_username" value="<?php echo $row['Username']; ?>">
                                        <button type="submit" name="Details_btn" class="btn btn-primary"> Details</button>
                                    </form>
                                </td>
                                <!-- <td>
                                <form action="delivery.php" method="post">
                                        <input type="hidden" name="Detail_username" value="<?php echo $row['Username']; ?>">
                                        <button type="submit" name="Details_btn" class="btn btn-success">Delivery</button>
                                    </form>
                                </td>
                             -->
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>