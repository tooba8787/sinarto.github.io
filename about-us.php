<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>About Us || Sinrato</title>
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
	<?php include('Header.php'); ?>
	

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<section class="contact-style-2 pt-30 pb-35">
        <div class="container-fluid">
            <div class="row">
				
                <div class="col-12">
                    <div class="contact2-title text-center mb-65">
                        <h2>About us</h2>
                        <p>We strive to be a sustainable company that contributes to a better world.<br>We exist to elevate life through technological artistry.</p>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php
	                              $qry="SELECT * FROM sinarto";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>address street</h3>
                        <p>Address : <?php echo $row['address']?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3>number phone</h3>
                        <p>Phone: <?php echo $row['phone']?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-fax"></i>
                        </div>
                        <h3>number fax</h3>
                        <p>Fax: <?php echo $row['fax']?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>address email</h3>
                        <p><?php echo $row['email']?></p>
                    </div>
                </div>
				<?php  } ?>
            </div>
        </div>
    </section>
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

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
</html>