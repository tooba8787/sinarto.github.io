<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:55:50 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>Home || Sinarto</title>
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

    <!-- header area start -->
    <?php include('Header.php')?>
    <!-- header area end -->
	
	
	
    <!-- slider area start -->
    <div class="slider-area">
	
        <div class="hero-slider-active slick-dot-style slider-arrow-style">
            <div class="single-slider d-flex align-items-center" style="background-image: url(assets/img/slider/slider1-home2.jpg);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                                <h1>Love it, Trust it<br>Keep it</h1>
                                <p>A whole new range of phones has landed.<br> Discover the latest devices built to lend<br>  a helping hand at home, work,<br> and everything in between.</p>
                               
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="single-slider d-flex align-items-center" style="background-image: url(assets/img/slider/1482297-thumbnail.jpg);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                               
                                <h1>Love it, Trust it<br>Keep it</h1>
                                <p style="color: black">A whole new range of phones has landed.<br> Discover the latest devices built to lend<br>  a helping hand at home, work,<br> and everything in between.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </div>
    <!-- slider area end -->

    <!-- feature area start -->
    <div class="feature-style-one pt-70 pb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-inner fix">
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/img/icon/wrapper1.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>free shipping</h4>
                                    <p>free shipping on all us order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/img/icon/wrapper2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Support 24/7</h4>
                                    <p>Contact us 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/img/icon/wrapper3.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>100% Money Back</h4>
                                    <p>You have 30 days to Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/img/icon/wrapper4.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>90 Days Return</h4>
                                    <p>If goods have problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/img/icon/wrapper5.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Payment Secure</h4>
                                    <p>We ensure secure payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->

    <!-- product wrapper area start -->
    <div class="product-wrapper fix pb-70">
        <div class="container-fluid">
            <div class="section-title product-spacing hm-11">
                <h3>Cellphones</h3>
                
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="one">
                    <div class="product-gallary-wrapper">
                        <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
							
							<?php
	                              $qry="SELECT * FROM product";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
							  <form method="post">
							          <div class="product-item">
                                      <div class="product-thumb">
                                    <a href="product-details.php?id=<?php echo $row['p_id']?>">
                                        <img src="<?php echo 'data:image/jpeg;base64,'. base64_encode($row['image'])?>" class="pri-img" alt="">
                                        
                                    </a>
                                  
                                    <div class="action-links">
										<?php if(isset($_SESSION['SESS-ID'])){?>
                                        <a href="Index.php?wish=<?php echo $row['p_id']; ?>" title="Wishlist"><i class="lnr lnr-heart"></i></a>
										<?php } else { ?>
										<a href="login.php" title="Login for Wishlist"><i class="lnr lnr-heart"></i></a>
										<?php } ?>
                                        
                                        
                                    </div>
                                </div>
                                          <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="#"><?php echo $row['brand']?></a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.php?id=<?php echo $row['p_id']?>"><?php echo $row['name']?></a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$<?php echo $row['price']?></span>
                                    </div>
											  
									<?php if(isset($_SESSION['SESS-ID'])){?>
                                    <button class="btn-cart" type="submit" name="cart1<?php echo $row['p_id']?>">add to cart</button>
											  
									<?php } else { ?>
									  <a class="btn-cart" href="login.php">Add to cart</a>
									<?php } ?>
											  
                                </div>
                            </div><!-- </div> end single item -->
							  </form>
							
							  <?php
							         $pid=$row['p_id'];
							         $qty=$row['qty'];
							         if(isset($_REQUEST['cart1'.$pid]))
									 {
							               $uid=$_SESSION['SESS-ID'];
							               $o_id=0;
							               if($row['s_price']<=0)
										   {
							                  $p_price=$row['price'];
										   }
							               else
										   {
											   $p_price=$row['s_price'];
										   }
										        $qry1 = "SELECT * FROM cart WHERE u_id = '$uid' AND p_id = '$pid' AND status='0'";
												$r1=mysqli_query($con,$qry1);
												$row1 = mysqli_fetch_assoc($r1);
												if((mysqli_num_rows($r1))>0)
												{
													$up="SELECT * FROM cart WHERE p_id='$pid' AND u_id='$uid'";
													$u=mysqli_query($con, $up);
													while($r3=mysqli_fetch_array($u))
													{ 
													  
													 $qnty=$r3['p_qty']+1;
													$p_total=$p_price*$qnty;
													$p_tax=0;
													$p_ship=0;
													$g_total=$p_ship+$p_total+$p_tax;
                                                     $qrr = "UPDATE cart SET p_qty = '$qnty', p_total='$p_total', g_total='$g_total' WHERE  u_id = '$uid' AND p_id = '$pid'";
										         	mysqli_query($con,$qrr);
													 
													} 
													
												}
											else
											{ 
													$p_qty=1;
													$p_total=$p_price*$p_qty;
													$p_tax=0;
													$p_ship=0;
													$g_total=$p_ship+$p_total+$p_tax;
													$status=0;
											
											$qrr= "INSERT INTO cart(id, u_id, order_id, p_id,p_price, p_qty, p_total, p_tax, p_ship, g_total, status) VALUES(null , '$uid' , '$o_id' , '$pid' , '$p_price' , '$p_qty' , '$p_total' , '$p_tax' , ' $p_ship' , '$g_total' , '$status')";
											mysqli_query($con,$qrr);
											
											$qty--;
											$qry2 = "UPDATE product SET qty = '$qty' WHERE p_id = '$pid'";
											mysqli_query($con,$qry2);
											echo "<script>window.location.replace('index.php')</script>";
									}
										 
												   
									 
									 } 
									?>
								
								  
							<?php } 
							
							?>
							
							<?php
									if(isset($_GET['wish']))
									{
										$pid=$_GET['wish'];
										$uid=$_SESSION['SESS-ID'];
										$status=0;
											
											$qrr= "INSERT INTO whishlist(whish_id, p_id, u_id, status) VALUES(null , '$pid' , '$uid' , '$status')";
											mysqli_query($con,$qrr);
										
										echo "<script>window.location.replace('Index.php')</script>";
									}
									
									?>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="two">
                    <div class="product-gallary-wrapper">
                        <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                            
							<div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-1.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£78.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-9.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-10.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-5%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>

                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£90.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-3.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-4.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                                <span>new</span>
                                            </div>
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">lg</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-8.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£78.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-5.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£46.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-2.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-3.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£65.00</span></span>
                                        <span class="old-price"><del>£90.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-1.jpg" class="pri-img" alt="">
                                        <img src="assets/img/product/product-2.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jamuna</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£30.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- product wrapper area start -->

    <!-- home banner statics area -->
    <div class="banner-statics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner-statics">
                        <a href="Home.php"><img src="assets/img/banner/img1-top-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner-statics">
                        <a href="Home.php"><img src="assets/img/banner/img2-top-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner-statics">
                        <a href="Home.php"><img src="assets/img/banner/img3-top-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner statics end -->

    <br></br>

   

    <!-- home banner statics area -->
    <div class="banner-statics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner-statics">
                        <a href="Home.php"><img src="assets/img/banner/img1-middle-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner-statics">
                        <a href="Home.php"><img src="assets/img/banner/img2-middle-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner statics end -->

    

    <!-- home product module five start -->
    <div class="home-module-five">
        <div class="container-fluid">
            <div class="section-title">
                <h3>Accessories </h3>
            </div>
            <div class="pro-module-four-active owl-carousel owl-arrow-style">
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="Home.php">jony</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.php">Beats EP Wired Headphone-Black</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£30.00</span></span>
                            <span class="old-price"><del>£450.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.php">
                            <img src="assets/img/product/product-8.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="Home.php">apple</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.php">JBL Flip 3 Portable Bluetooth</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.php">
                            <img src="assets/img/product/product-4.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="Home.php">sumsang</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.php">Marshall Portable  Bluetooth Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£40.00</span></span>
                            <span class="old-price"><del>£60.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.php">
                            <img src="assets/img/product/product-6.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="Home.php">walton</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.php">jony XB10 Portable  Wireless Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.php">
                            <img src="assets/img/product/product-2.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
            </div>
        </div>
    </div>
    <!-- home product module five end -->
<br></br>
    

    <!-- home banner statics area -->
    <div class="banner-statics">
        <div class="container-fluid">
            <div class="single-banner-statics">
                <a href="Home.php"><img src="assets/img/banner/img-bottom-sinrato1.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- home banner statics area end -->
    <br></br>


    <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

    <!-- footer area start -->  
    <?php include('Footer.php')?>
    <!-- footer area end -->

    <!-- Quick view modal start -->
    <div class="modal fade" id="quickk_view">
        <div class="container">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-4.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-5.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-6.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-7.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-8.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-9.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="pro-nav">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-4.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-5.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-6.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-7.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-8.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-9.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-inner">
                                    <div class="product-details-contentt">
                                        <div class="pro-details-name mb-10">
                                            <h3>Bose SoundLink Bluetooth Speaker</h3>
                                        </div>
                                        <div class="pro-details-review mb-20">
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </li>
                                                <li><a href="#">1 Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="price-box mb-15">
                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                            <span class="old-price"><del>£60.00</del></span>
                                        </div>
                                        <div class="product-detail-sort-des pb-20">
                                            <p>Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned</p>
                                        </div>
                                        <div class="pro-details-list pt-20">
                                            <ul>
                                                <li><span>Availability :</span>In Stock</li>
                                            </ul>
                                        </div>
                                        <div class="product-availabily-option mt-15 mb-15">
                                            <h3>Available Options</h3>
                                            <div class="color-optionn">
                                                <h4><sup>*</sup>color</h4>
                                                <ul>
                                                    <li>
                                                        <a class="c-black" href="#" title="Black"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-blue" href="#" title="Blue"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-brown" href="#" title="Brown"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-gray" href="#" title="Gray"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-red" href="#" title="Red"></a>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="pro-quantity-box mb-30">
                                            <div class="qty-boxx">
                                                <label>qty :</label>
                                                <input type="text" placeholder="0">
                                                <button class="btn-cart lg-btn">add to cart</button>
                                            </div>
                                        </div>
                                        <div class="pro-social-sharing">
                                            <label>share :</label>
                                            <ul>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-facebook" title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                        <span>like 0</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-twitter" title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                        <span>tweet</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-google" title="Google Plus">
                                                        <i class="fa fa-google-plus"></i>
                                                        <span>google +</span>
                                                    </a>
                                                </li>
                                            </ul>
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
    <!-- Quick view modal end -->

	<!-- all js include here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:56:42 GMT -->
</html>