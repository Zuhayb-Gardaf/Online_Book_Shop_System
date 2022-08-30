<?php
include('datadase/security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
 ?>

<?php
            $connect = mysqli_connect("localhost", "root", "", "bookstore");  
            $sql = "SELECT * FROM deli INNER JOIN cart ON deli.Customer= cart.Customer";  
            $result = mysqli_query($connect, $sql);
        ?>
 
<div class="card-body">

<div class="table-responsive">

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th > Customer </th>
                <th> Product  </th>
                <th>Quantity </th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
        <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["Customer"];?></td>  
                               <td><?php echo $row["Product"]; ?></td>  
                               <td><?php echo $row["Quantity"];?></td>  
                                 
                          </tr> 
                          <?php  
                               }  
                          }  
                          ?> 
        <!-- <tr>
            <td>
                     <form action="Detail.php" method="post"> 
                            <input type="hidden" name="Detail_username" value="<?php echo $row['Username']; ?>">
                            <button type="submit" name="Details_btn" class="btn btn-success">Delivery</button>
                        </form>
                    </td>
                
                </tr> -->
        </tbody>
    </table>

</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>