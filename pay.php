<?php
	session_start();
  if(!isset($_SESSION['user']))
       header("location: index.php?Message=Login To Continue");
	include "dbconnect.php";
         $customer=$_SESSION['user'];
?>
<?php

        if(isset($_GET['place']))
                 {  
                    $query="DELETE FROM cart where Customer='$customer'";
                    $result=mysqli_query($con,$query);
                 ?>
                    <script type="text/javascript">
                         alert("Order SuccessFully Placed!! Kindly Keep the cash Ready. It will be collected on Delivery");
                    </script>
                 <?php                  
                  }
        if(isset($_GET['remove']))
                 {  $product=$_GET['remove'];
                    $query="DELETE FROM cart where Customer='$customer' AND Product='$product'";
                    $result=mysqli_query($con,$query);
                 ?>
                    <script type="text/javascript">
                         alert("Item Successfully Removed");
                    </script>
                 <?php                  
                  }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <meta name="author" content="Shivangi Gupta">
    <title>Online Bookstore</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/pay.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
</head>
<body> 
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="padding: 1px;"><img class="img-responsive" alt="Brand" src="img/logo.jpg"  style="width: 147px;margin: 0px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
        <?php
        if(!isset($_SESSION['user']))
          {
            echo'
            <li>
                <button type="button" id="login_button" class="btn btn-lg" data-toggle="modal" data-target="#login">Login</button>
                  <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center">Login Form</h4>
                            </div>
                            <div class="modal-body">
                                          <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
                                              <div class="form-group">
                                                  <label class="sr-only" for="username">Username</label>
                                                  <input type="text" name="login_username" class="form-control" placeholder="Username" required>
                                              </div>
                                              <div class="form-group">
                                                  <label class="sr-only" for="password">Password</label>
                                                  <input type="password" name="login_password" class="form-control"  placeholder="Password" required>
                                              </div>
                                              <div class="form-group">
                                                  <button type="submit" name="submit" value="login" class="btn btn-block">
                                                      Sign in
                                                  </button>
                                              </div>
                                          </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>
            </li>
            <li>
              <button type="button" id="register_button" class="btn btn-lg" data-toggle="modal" data-target="#register">Sign Up</button>
                <div id="register" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title text-center">Member Registration Form</h4>
                          </div>
                          <div class="modal-body">
                                        <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
                                            <div class="form-group">
                                                <label class="sr-only" for="username">Username</label>
                                                <input type="text" name="register_username" class="form-control" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="password">Password</label>
                                                <input type="password" name="register_password" class="form-control"  placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" value="register" class="btn btn-block">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
                </div>
            </li>';
          } 
        else
          {   echo' <li> <a href="#" class="btn btn-lg"> Hello ' .$_SESSION['user']. '.</a></li>
                    <li> <a href="cart.php" class="btn btn-lg"> Cart </a> </li>; 
                    <li> <a href="destroy.php" class="btn btn-lg"> LogOut </a> </li>';
               
          }
?>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div id="top" >
      <div id="searchbox" class="container-fluid" style="width:112%;margin-left:-6%;margin-right:-6%;">
          <div>
              <form role="search" method="POST" action="Result.php">
                  <input type="text" class="form-control" name="keyword" style="width:80%;margin:20px 10% 20px 10%;" placeholder="Search for a Book , Author Or Category">
              </form>
          </div>
      </div>

<!--       
    <div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-12 col-lg-11">
        <div class="card card0 rounded-0">
            <div class="row">
            <div class="col-md-5 d-md-block d-none p-0 box"> 
                 <br>
                <br>
                <br>
  
						<div class="card rounded-0 border-0 card1" id="bill">
							
							<div class="row">
								<div class="col-lg-7 col-8 mt-4 line pl-4">
                                <img class="img-responsive" alt="Brand" src="img/1.jpg"  style="width: 147px;margin: 0px;">

								</div>
								<br>
                <br>
							</div>
							<div class="row">
								<div class="col-lg-7 col-8 mt-4 line pl-4">
									<h2 class="bill-head">merchant No :</h2>
								</div>
                                <br>
                <br>
							</div>
							<div class="row">
								<div class="col-md-12 red-bg">
									<h2 class="bill-date" id="total-label"> 445566</h2>
								
								</div>
							</div>
							<div class="row">
								<div class="col-lg-7 col-8 mt-4 line pl-4">
									<h2 class="bill-head">Price </h2>
								</div>
								<div class="col-lg-5 col-4 mt-4">
									<h2 class="bill-head px-xl-5 px-lg-4">JFK</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 red-bg">
									<p class="bill-date" id="total-label">Total Price</p>
									<h2 class="bill-head" id="total">$ 523.65</h2>
								</div>
							</div>
						</div>
					</div>  -->
                    
                <br>
                <br>
                    <img src="img/1.jpg"  style="margin-top: 50px; width: 270px">
                
                    <img  src="img/2.jpg"  style="margin-top: 50px; width: 280px">
                    
                <div class="col-md-7 col-sm-12 p-0 box">
                    <div class="card rounded-0 border-0 card2" id="paypage">
                        <div class="form-card">
                            <h2 id="heading2" class="text-danger">Payment Method</h2>
                            <div class="radio-group">
                                <div class="radio" data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
                    
                                <br>
                            </div>
                            <label class="pay">Name on Card</label>
                            <input type="text" name="holdername" placeholder="Suhayb Abdi">
                            <div class="row">
                                <div class="col-8 col-md-6">
                                    <label class="pay">Card Number</label>
                                    <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19">
                                </div>
                                <div class="col-4 col-md-6">
                                    <label class="pay">CVV</label>
                                    <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="pay">Expiration Date</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a type="submit" value=" &nbsp; &#xf178;" class="btn  placeicon1" href="succes.php">MAKE A PAYMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/pay.js"></script>
</body>
<html>	