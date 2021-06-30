
<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/my-account.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>My Account || Sinrato</title>
	<!--Fevicon-->
	<link rel="icon" href="assets/img/icon/favicon.ico" type="image/x-icon" />
	<!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- linear-icon -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/linear-icon.css">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- default style -->
    <link rel="stylesheet" href="assets/css/default.css">
    <!-- Main Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	
	<?php include('Header.php')?>

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of My Account Wrapper -->
    <div class="my-account-wrapper pb-20">
        <div class="container-fluid">
			<?php if(isset($_SESSION['SESS-ID'])){ 
							          $id= $_SESSION['SESS-ID'];
	                                 $ch = "SELECT * FROM register WHERE u_id='$id'";
								   $rr=mysqli_query($con,$ch);
								   while($row=mysqli_fetch_array($rr))
								   {
							         ?>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="user-dashboard pb-50">
                            <div class="user-info mb-30">
                                <div class="row align-items-center no-gutters">
                                   <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                       <div class="single-info">
                                           <p class="user-name">Hello <span><?php echo $row['fname']." ".$row['lname'] ?></span> <br></br><a class="log-out" href="logout.php">Log Out</a></p>
                                       </div>
                                   </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
									   <?php
	                              $qry="SELECT * FROM sinarto";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                                       <div class="single-info">
                                           <p>Need Assistance? Customer service at <a href="#"><?php echo $row['email']?></a></p>
                                       </div>
									   
                                   </div>
                                   <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                       <div class="single-info">
                                           <p>E-mail them at <a href="#"><?php echo $row['email']?></a></p>
                                       </div>
                                   </div>
							<?php  }
										
										?>
                                   <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                       <div class="single-info justify-content-lg-center">
                                           <a class="btn btn-secondary" href="cart.php">View Cart</a>
                                       </div>
                                   </div>
                               </div> <!-- end of row -->
                            </div> <!-- end of user-info -->

                            <div class="main-dashboard">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                         <ul class="nav flex-column dashboard-list" role="tablist">
                                        <li class="active"><a class="active" href="accountdetail.php"><i class="icon-user"></i> Account Detail</a></li>
										<li><a href="orderhistory.php"><i class="icon-user"></i>Orders</a></li>
                                        <li><a href="address.php"><i class="icon-map-marker"></i> Address</a></li>
                                        <li><a href="wishlist.php"><i class="icon-heart"></i> Wishlist</a></li>
                                        <li><a href="logout.php"><i class="icon-power-switch"></i>Logout</a></li>
                                    </ul> <!-- end of dashboard-list -->
                                    </div>

                          <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                        <!-- Tab panes -->
                         <div class="col-lg-8">
                        <div class="ps-section__right">
                            <form class="ps-form--account-setting" method="post">
                                <div class="ps-form__header">
                                    <h3>Account Detail</h3>
									<br></br>
                                </div>
                                <div class="ps-form__content">
                                    
                                    <div class="row">
										 <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input class="form-control" name="fname" type="text" value="<?php echo $row['fname'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input class="form-control" name="lname" type="text" value="<?php echo $row['lname'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input class="form-control" name="email" type="text" value="<?php echo $row['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" name="phone" type="text" value="<?php echo $row['phone'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>BirthDate</label>
                                                <input class="form-control" name="dob" type="text" value="<?php echo $row['dob'] ?>">
                                            </div>
                                        </div>
										
                                        
                                    </div>
                                </div>
                                <div class="form-group submit" align="right">
                                    <button class="btn btn-secondary" type="submit" name="upd<?php echo $row['u_id'] ?>">Update</button>
                                </div>
								
                            </form>
							
                        </div>
                    </div> <!-- end of tab-pane --> <!-- end of tab-pane --> 
											
                                        </div>
								
								
                                </div> <!-- end of row -->
							
                            </div> <!-- end of main-dashboard -->
                        </div> <!-- end of user-dashboard -->
                    </main> <!-- end of #primary -->
                </div>
			
            </div> <!-- end of row -->
	<?php 
										 $id=$row['u_id'];
									  if(isset($_REQUEST['upd'.$id]))
									   {
										  $fname=$_REQUEST['fname'];
										  $lname=$_REQUEST['lname'];
										  $phone=$_REQUEST['phone'];
										  $email=$_REQUEST['email'];
										  $dob=$_REQUEST['dob'];
										  
                                          $q = "UPDATE register SET fname = '$fname', lname='$lname', phone='$phone', dob='$dob', email='$email', dob='$dob' WHERE u_id = '$id'";
									      mysqli_query($con,$q);
										  echo "<script>window.location.replace('accountdetail.php')</script>";
								   }
								   
								   } } ?>
        </div> <!-- end of container -->
    </div>
    <!-- End of My Account Wrapper -->

   <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

    <?php include('Footer.php')?>

	<!-- all js include here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/my-account.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
</html>