<?php include('Connect.php') ?>
<!-- footer area start -->  
    <footer>
        <!-- news-letter area start -->
        <div class="newsletter-group">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-box">
                            <div class="newsletter-inner">
                                <div class="newsletter-title">
                                    <h3>Sign Up For Newsletters</h3>
                                    <p>Be the First to Know. Sign up for newsletter today</p>
                                </div>
                                <div class="newsletter-box">
                                    <form>
                                        <input type="email" name="email" autocomplete="off" class="email-box" placeholder="enter your email">
                                        <button class="newsletter-btn" name="btn1" type="submit">subscribe !</button>
                                    </form>
									<?php 
							if(isset($_REQUEST['btn1']))
							{
								$e = $_REQUEST['email'];
								$s = 1;

								$insert = "INSERT INTO newsletter(n_id,email,status) VALUES (NULL,'$e','$s')";
								mysqli_query($con,$insert);
							}
	                   ?>
                                </div>
                            </div>
                            <div class="link-follow">
								<?php
	                              $qry="SELECT * FROM sinarto";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                                <a href=<?php echo $row['fb']?>><i class="fa fa-facebook"></i></a>
                                <a href=<?php echo $row['insta']?>><i class="fa fa-google-plus"></i></a>
                                <a href=<?php echo $row['fb']?>><i class="fa fa-twitter"></i></a>
                                <a href=<?php echo $row['fb']?>><i class="fa fa-youtube"></i></a>
								<?php  }
										
										?>
                            </div>
                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- news-letter area end -->
        <!-- footer top area start -->
        <div class="footer-top pt-50 pb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <div class="footer-logo mb-30">
                                    <a href="index.html">
                                         <img src="assets/img/logo/logo-sinrato.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                <div class="payment-method">
                                    <h4>payment</h4>
                                    <img src="assets/img/payment/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>Information</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
                                    <ul>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>contact us</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
									<?php
	                              $qry="SELECT * FROM sinarto";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                                    <ul>
                                        <li><span>Address:</span><?php echo $row['address']?></li>
                                        <li><span>email:</span><?php echo $row['email']?></li>
                                        <li><span>Call us:</span> <strong><?php echo $row['phone']?></strong></li>
                                    </ul>
									<?php  }
										
										?>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                <!--single widget end -->
                </div>
            </div>
        </div>
        <!-- footer top area end -->
        <!-- footer bottom area start -->
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content">
                            <div class="footer-copyright">
								<p> All Rights Reserved to Anees Fatima & Tooba Ajmal <span class="lnr lnr-heart"></span></p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->
    </footer>
    <!-- footer area end -->