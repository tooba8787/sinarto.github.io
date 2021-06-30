<?php
session_start();
?>
<?php
 $brand = $_GET['id'];
?>
<?php
 $pid = $_GET['id'];
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/shop-list-left-sidebar.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>Home || Sinrato</title>
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

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop list left sidebar</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

     <!-- shop page main wrapper start -->
   <div class="main-wrapper pt-35">
       <div class="container-fluid">
           <div class="row">
              
               <div class="col-lg-12 order-first order-lg-last">
                    <div class="product-shop-main-wrapper mb-50">
                        
                        <div class="shop-top-bar mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                           <a class="active" href="#" data-target="column_3"><span>3-col</span></a>
                                            <a href="#" data-target="grid"><span>4-col</span></a>
                                            <a  href="#" data-target="list"><span>list</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-bar-right">
                                        <div class="per-page">
                                            <p>Show : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">10</option>
                                                <option value="sales">20</option>
                                                <option value="sales">30</option>
                                                <option value="rating">40</option>
                                                <option value="date">50</option>
                                                <option value="price-asc">60</option>
                                                <option value="price-asc">70</option>
                                                <option value="price-asc">100</option>
                                            </select>
                                        </div>
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                                <option value="rating">Price (Low &gt; High)</option>
                                                <option value="date">Rating (Lowest)</option>
                                                <option value="price-asc">Model (A - Z)</option>
                                                <option value="price-asc">Model (Z - A)</option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="shop-product-wrap column_3 row">
							
							<?php
	                              $qry="SELECT * FROM product WHERE b_id='$brand'";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <form method="post">
								<div class="product-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.php?id=<?php echo $row['p_id']?>">
                                            <img src="<?php echo 'data:image/jpeg;base64,'. base64_encode($row['image'])?>" class="pri-img" alt="">
                                            <img src="<?php echo 'data:image/jpeg;base64,'. base64_encode($row['image'])?>" class="sec-img" alt="">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product label_new">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="action-links">
                                             <a href="Home.php?wish=<?php echo $row['p_id']; ?>&&id=<?php echo $brand ?>" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                            <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="manufacture-product">
                                            <p><a href="Home.php"><?php echo $row['brand']?></a></p>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html"><?php echo $row['name']?></a></h4>
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
                                        <button class="btn-cart" type="submit" name="cart3<?php echo $row['p_id']?>">add to cart</button>
                                    </div>
                                </div> <!-- end single grid item -->
								</form>
								<?php
							         $pid=$row['p_id'];
							         $qty=$row['qty'];
							         if(isset($_REQUEST['cart3'.$pid]))
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
								
								<form method="post">
								
                                <div class="sinrato-list-item mb-30">
                                    <div class="sinrato-thumb">
										
                                        <a href="product-details.php?id=<?php echo $row['p_id']?>">
											
                                            <img src="<?php echo 'data:image/jpeg;base,'. base64_encode($row['image'])?>" class="pri-img" alt="">
                                            <img src="<?php echo 'data:image/jpeg;base,'. base64_encode($row['image'])?>" class="sec-img" alt="">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product label_sale">
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                    </div>
									
									
									
                                    <div class="sinrato-list-item-content">
                                        <div class="manufacture-product">
                                            <span><a href="#"><?php echo $row['brand']?></a></span>
                                        </div>
                                        <div class="sinrato-product-name">
                                            <h4><a href="product-details.html"><?php echo $row['name']?></a></h4>
                                        </div>
                                        <div class="sinrato-ratings mb-15">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="sinrato-product-des">
                                            <p><?php echo $row['description']?></p>
                                        </div>
                                    </div>
                                    <div class="sinrato-box-action">
                                        <div class="price-box">
                                            <span class="regular-price"><span class="special-price">$<?php echo $row['price']?></span></span>
                                            <span class="old-price"><del>$<?php echo $row['price']?></del></span>
                                        </div>
                                        <button class="btn-cart" type="submit" name="cart4<?php echo $row['p_id']?>">add to cart</button>
                                        <div class="action-links sinrat-list-icon">
                                             <a href="Home.php?wish1=<?php echo $row['p_id']; ?>&&id=<?php echo $brand ?>" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                            <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                            <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- end single list item -->
								</form>
								<?php
							         $pid=$row['p_id'];
							         $qty=$row['qty'];
							         if(isset($_REQUEST['cart4'.$pid]))
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
								
									</div>
                           <?php } ?>
							<?php
									if(isset($_GET['wish']))
									{
										$pid=$_GET['wish'];
										$uid=$_SESSION['SESS-ID'];
										$status=0;
											
											$qrr= "INSERT INTO whishlist(whish_id, p_id, u_id, status) VALUES(null , '$pid' , '$uid' , '$status')";
											mysqli_query($con,$qrr);
										
										echo "<script>window.location.replace('Home.php?id=$brand')</script>";
									}
									
									?>
							
							<?php
									if(isset($_GET['wish1']))
									{
										$pid=$_GET['wish1'];
										$uid=$_SESSION['SESS-ID'];
										$status=0;
											
											$qrr= "INSERT INTO whishlist(whish_id, p_id, u_id, status) VALUES(null , '$pid' , '$uid' , '$status')";
											mysqli_query($con,$qrr);
										
										echo "<script>window.location.replace('Home.php?id=$brand')</script>";
									}
									
									?>
                        </div>
                     
                    </div>
               </div>
           </div>
       </div>
   </div>
   <!-- shop page main wrapper end -->

   <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> 
	<!-- /End Scroll to Top -->

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

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/shop-list-left-sidebar.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
</html>