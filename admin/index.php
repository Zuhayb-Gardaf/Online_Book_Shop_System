<?php
include('datadase/security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
  </div> 

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
                $connection = mysqli_connect("localhost","root","","adminpanel");
                $query = "SELECT id FROM register ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Total Admin: '.$row.'</h4>';
            ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-primary-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bookes</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
                $connection = mysqli_connect("localhost","root","","bookstore");
                $query = "SELECT PID FROM products ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Bookes: '.$row.'</h4>';
            ?>
            </div>
            </div>
            <div class="col-auto">
            <i class="fas fa-book fa-2x text-primary-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Customer</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
                $connection = mysqli_connect("localhost","root","","bookstore");
                $query = "SELECT Customer FROM cart ORDER BY Customer";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> pending: '.$row.'</h4>';
            ?>
            </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-boxes fa-2x text-primary-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pending Requests Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Delivery</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
                $connection = mysqli_connect("localhost","root","","adminpanel");
                $query = "SELECT id FROM register ORDER BY id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Delivery : '.$row.'</h4>';
            ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-shipping-fast fa-2x text-primary-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total Users </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $connection = mysqli_connect("localhost","root","","bookstore");
                $query = "SELECT UserName FROM users ORDER BY UserName";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<br/> <h4> Users: '.$row.'</h4>';
            ?>
            </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-primary-300"></i>
            </div>
          </div>
        </div>
        
        <?php
  $con = mysqli_connect("localhost","root","","bookstore");
  if($con){
    echo "";
  }
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT * FROM contribution";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['student']."',".$result['contribution']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Top Bookes '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <div id="piechart" style="width: 900px; height: 500px;"></div>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>