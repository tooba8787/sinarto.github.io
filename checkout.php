<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:02 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>Sinrato - Mega Shop Electronics eCommerce Bootstrap 4 Template</title>
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
	
    <!-- header area start -->
    <?php include('Header.php')?>
    <!-- header area end -->

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of Checkout Wrapper -->
    <div class="checkout-wrapper pt-10 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                      <form method="post">
                        <div class="checkout-area">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                                    <div class="checkout-form">
                                        <div class="section-title left-aligned">
                                            <h3>Billing Details</h3>
                                        </div>

                                       
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="fname" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="lname" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                        
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="email_address">Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="p_address">Address <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="address" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="city_name">City <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="city"  required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="province_name">State<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="state"  required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="zip_code">Zip Code <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="zip" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="country_name" class="d-block">Country <span class="text-danger">*</span></label>
                                                   <input type="text" name="country" class="form-control" required>
                                             
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="tel_number">Telephone</label>
                                                    <input type="tel" class="form-control" name="tele">
                                                </div>
                                               
                                            </div>
										
                                        
										
                                    </div> <!-- end of checkout-form -->
                                </div>
								
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="order-summary">
                                        <div class="section-title left-aligned">
                                            <h3>Your Order</h3>
                                        </div>
                                        <div class="product-container">
											<?php
							            $id= $_SESSION['SESS-ID'];
	                                 $ch = "SELECT * FROM cart WHERE status = '0' AND u_id='$id'";
								   $rr=mysqli_query($con,$ch);
								   while($row=mysqli_fetch_array($rr))
								   { 
									 $pid=$row['p_id'];
									   $qry = "SELECT * FROM product WHERE  p_id='$pid'";
								   $r1=mysqli_query($con,$qry);
								   while($r=mysqli_fetch_array($r1))
								   {	
										
										?>
                                            <div class="product-list">
                                                <div class="product-inner media align-items-center">
                                                    <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                                        <a href="product-details.php?id=<?php echo $pid; ?>">
                                                            <img src="<?php echo $r['image'] ?>" alt="Compete Track Tote" title="Compete Track Tote">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5><?php echo $r['name'] ?></h5>
                                                        <p class="product-quantity">Quantity: <?php echo $row['p_qty'] ?></p>
                                                        <p class="product-final-price">Rs.<?php echo $row['p_price'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
											
								<?php } } ?>			
                                        </div> <!-- end of product-container -->
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td class="text-center">Rs.<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(p_total) as g_tot FROM cart WHERE status = '0' AND u_id='$id'";
										$sumr=mysqli_query($con,$sum);
										while($s=mysqli_fetch_array($sumr))
										{
												echo $s['g_tot'];
										}?></td>
                                                        </tr>    
														<tr class="cart-subtotal">
                                                            <th>Shipping</th>
                                                            <td class="text-center">Free Shipping</td>
                                                        </tr>    
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td class="text-center"><strong>Rs.<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(g_total) as g_tot FROM cart WHERE status = '0' AND u_id='$id'";
										$sumr=mysqli_query($con,$sum);
										while($s=mysqli_fetch_array($sumr))
										{
												echo $s['g_tot'];
										}?></strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
										
										<div class="form-row justify-content-end" align="center">
                                           <button type="submit" name="btn" class="btn btn-secondary dark" value="" style="height: 50px; width: 100%; margin-top: 20px;">Continue to Payment</button>
                                        </div>
										<!-- end of checkout-payment -->
                                    </div> <!-- end of order-summary -->
                                </div>
									
                            </div> <!-- end of row -->
                        </div> 
	</form>
						<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(g_total) as g_tot FROM cart WHERE u_id='$id' AND status='0'";
										$sumr=mysqli_query($con,$sum);
										while($sumrr=mysqli_fetch_array($sumr))
										{
											if(isset($_REQUEST['btn']))
											{
											$total= $sumrr['g_tot'];
											$id=$_SESSION['SESS-ID'];
											$name1 = $_REQUEST['fname'];
											$name2 = $_REQUEST['lname'];
											$email = $_REQUEST['email'];
											$address = $_REQUEST['address'];
											$city = $_REQUEST['city'];
											$state = $_REQUEST['state'];
											$zip = $_REQUEST['zip'];
											$country = $_REQUEST['country'];
											$tele = $_REQUEST['tele'];
											$date = date('j/M/Y');	
											
											$insert="INSERT INTO checkout(
											o_id,fname,lname,country,address,city,state,zip,phone,email,u_id,total,status,date) VALUES(null,'$name1','$name2','$country','$address','$city','$state','$zip','$tele','$email','$id','$total','$0','$date')";	
											mysqli_query($con,$insert);	
												
											$q= "SELECT * FROM checkout WHERE u_id='$id' AND status='0' ORDER BY o_id DESC LIMIT 0,1";
											$qry=mysqli_query($con,$q);
											$r=mysqli_fetch_array($qry);
											$invoice=$r['o_id'];
												
											echo "<script>window.location.replace('payment.php?msg=$invoice')</script>";
											
										}
											
										}
										
										?>
						<!-- end of checkout-area -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Checkout Wrapper -->

   <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

    <!-- footer area start -->  
    <?php include('Footer.php')?>
    <!-- footer area end -->

	<!-- all js include here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:02 GMT -->
</html>