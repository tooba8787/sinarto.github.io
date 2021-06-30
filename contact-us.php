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
	<title>Contact Us || Sinrato</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact us area -->
  

    <!-- contact form two -->
    <div class="contact-two-area pt-60 pb-70">
       <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact2-title text-center mb-60">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-message">
                        <form  method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="fname" placeholder="Name *" type="text">    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text">   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email" placeholder="Email *" type="text">    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="subject" placeholder="Subject *" type="text">   
                                </div>
                               <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message"  class="form-control2" required=""></textarea>     
                                    </div>   
                                    <div class="contact-btn text-center">
                                        <button class="btn btn-secondary" name="btn1" type="submit">Send Message</button> 
                                    </div> 
                                </div> 
                            </div>
                        </form>    
						<?php 
							if(isset($_REQUEST['btn1']))
							{
								$name = $_REQUEST['fname'];
								$phone = $_REQUEST['phone'];
								$email = $_REQUEST['email'];
								$subject = $_REQUEST['subject'];
								$message = $_REQUEST['message'];
								$date = date('j/M/Y');

								$insert = "INSERT INTO contact_us(cont_id,name,phone,email,subject,msg,date,status) VALUES (NULL,'$name','$phone','$email','$subject','$message','$date',0)";
								mysqli_query($con,$insert);
								echo "<script>window.location.replace('contact-us.php')</script>";
							}
	                   ?>
                    </div> 
               </div>
           </div>
       </div>
   </div>

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

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
</html>