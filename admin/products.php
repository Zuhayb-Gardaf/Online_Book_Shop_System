<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary"> Products  
    <a href="addbooks.php" class="btn btn-primary" role="button" data-bs-toggle="button">Add Books</a>
  
    </h5></div>

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
                $query = "SELECT * FROM products";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> PID </th>
                            <th>Title </th>
                            <th> Author</th>
                            <th>MRP</th>
                            <th> Price</th>
                            <th>Discount</th>
                            <th> Available</th>
                            <th>Publisher</th>
                            <th> Edition</th>
                            <th>Category</th>
                            <th>Language</th>
                            <th>page</th>
                            <th>weight</th>
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
                                <td><?php  echo $row['PID']; ?></td>
                                <td><?php  echo $row['Title']; ?></td>
                                <td><?php  echo $row['Author']; ?></td>
                                <td><?php  echo $row['MRP']; ?></td>
                                <td><?php  echo $row['Price']; ?></td>
                                <td><?php  echo $row['Discount']; ?></td>
                                <td><?php  echo $row['Available']; ?></td>
                                <td><?php  echo $row['Publisher']; ?></td>
                                <td><?php  echo $row['Edition']; ?></td>
                                <td><?php  echo $row['Category']; ?></td>
                                <td><?php  echo $row['Language']; ?></td>
                                <td><?php  echo $row['page']; ?></td>
                                <td><?php  echo $row['weight']; ?></td>
                            
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