<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>Register || Sinrato</title>
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
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

   <?php include('Header.php')?>

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of Login Wrapper -->
    <div class="login-wrapper pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="user-login">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title text-center">
                                        <h3>Create an Account</h3>
                                    </div>
                                </div>
                            </div> <!-- end of row -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                    <div class="registration-form login-form">
                                        <form action="#">
                                            <div class="login-info mb-20">
                                                <p>Already have an account? <a href="login.php">Log in instead!</a></p>
                                            </div>
                                            
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="fname" id="first_name" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="last_name" name="lname" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                        
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="email_address">Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email" id="email_address" required>
                                                </div>
												<div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="email_address">Password<span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" name="pass" id="password" required>
                                                </div>
                                            </div>
											
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="p_address">Address <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="address" id="p_address" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="city_name">City <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="city" id="city_name" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="province_name">State<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="state" id="province_name" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="zip_code">Zip Code <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="zip" id="zip_code" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="country_name" class="d-block">Country <span class="text-danger">*</span></label>
                                                   <input type="text" name="country" class="form-control" required>
                                             
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="tel_number">Telephone</label>
                                                    <input type="tel" class="form-control" name="tele" id="tel_number">
                                                </div>
                                               
                                            </div>
											<div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="tel_number">BirthDate</label>
                                                    <input type="text" class="form-control" name="dob" id="tel_number">
                                                </div>
                                               
                                            </div>
                                           
                                           
                                            <div class="register-box d-flex justify-content-end mt-20">
                                                <button type="submit" class="btn btn-secondary" name="btn2">Register</button>
                                            </div>
                                        </form>
										<?php 
							if(isset($_REQUEST['btn2']))
							{
								$name1 = $_REQUEST['fname'];
								$name2 = $_REQUEST['lname'];
								$email = $_REQUEST['email'];
								$pass = $_REQUEST['pass'];
								$address = $_REQUEST['address'];
								$city = $_REQUEST['city'];
								$state = $_REQUEST['state'];
								$zip = $_REQUEST['zip'];
								$country = $_REQUEST['country'];
								$tele = $_REQUEST['tele'];
								$dob = date('j/M/Y');
								$date = date('j/M/Y');
								

								$insert2 = "INSERT INTO register(u_id,fname,lname,email,pass,address,city,state,zip,country,phone,status,date,dob) VALUES (NULL,'$name1','$name2','$email','$pass','$address','$city','$state','$zip','$country','$tele',0,'$date','$dob')";
								$res = mysqli_query($con,$insert2);
								echo "<script>window.location.replace('register.php')</script>";
							}
									
								
							    ?>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of user-login -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Login Wrapper -->

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

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
</html>