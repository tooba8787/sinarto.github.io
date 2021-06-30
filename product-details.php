<?php
session_start();
?>
<?php
 $pid=$_GET['id'];
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:02 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>Product Detail || Sinrato</title>
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
	
	<?php include('Header.php') ?>

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

   <!-- product details wrapper start -->
    <div class="product-details-main-wrapper pb-50">
        <div class="container-fluid">
            <div class="row">
				
				<?php
	                              $qry="SELECT * FROM product WHERE p_id='$pid'";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                <div class="col-lg-5">
                    <div class="product-large-slider mb-20">
                        <div class="pro-large-img">
                            <img src="<?php echo $row['image']?>" alt="" />
                            <div class="img-view">
								<?php
	                              $qry="SELECT * FROM product_image WHERE p_id='$pid'";
							      $r=mysqli_query($con,$qry);
							      while($row1=mysqli_fetch_array($r))
								  { ?>
                                <a class="img-popup" href="<?php echo 'data:image/jpeg;base64,'. base64_encode($row1['img'])?>"><i class="fa fa-search"></i></a>
								
								<?php } ?>
                            </div>
                        </div>
                      
                    </div>
                    <div class="pro-nav">
						
						<?php
	                              $qry="SELECT * FROM product_image WHERE p_id='$pid'";
							      $r=mysqli_query($con,$qry);
							      while($row1=mysqli_fetch_array($r))
								  { ?>
								<div class="pro-nav-thumb"><img src="<?php echo 'data:image/jpeg;base64,'. base64_encode($row1['img'])?>" alt="" /></div>
								<?php } ?>
                        
                       
                    </div>
                </div>
				<form method="post">
                <div class="col-lg-7">
                    <div class="product-details-inner">
                        <div class="product-details-contentt">
                            <div class="pro-details-name mb-10">
                                <h3><?php echo $row['name'];?></h3>
                            </div>
                            <div class="pro-details-review mb-20">
                                <ul>
                                    
                                    <li><a href="#"><?php echo $row['Reviews'];?> Reviews</a></li>
                                </ul>
                            </div>
                            <div class="price-box mb-15">
                                <span class="regular-price"><span class="special-price">$<?php echo $row['price'];?></span></span>
                                <span class="old-price"><del>$<?php echo $row['s_price'];?></del></span>
                            </div>
                            
                            <div class="pro-details-list pt-20">
                                <ul>
                                   
                                    <li><span>Brands :</span><a href="#"><?php $brand= $row['b_id'];
								  $qry="SELECT * FROM brand WHERE b_id='$brand'";
							      $r=mysqli_query($con,$qry);
							      while($row1=mysqli_fetch_array($r))
								  {
									  echo $row1['name'];
								  }
										
							      ?></a></li>
                                    <li><span>Product Code: </span><?php echo $row['SKU/IMEI'];?></li>
                                    
                                    <li><span>Availability :</span>
									<?php $qnty =$row['qty'];
								    if($qnty>0)
									{
										echo "In Stock";
									}
								   else
								   {
									   echo "Out of Stock";
								   }
								   ?>
										</li>
                                </ul>
                            </div>
                            <div class="product-availabily-option mt-15 mb-15">
                                <h3>Available Options</h3>
                          
                            </div>
                            <div class="pro-quantity-box mb-30">
                                <div class="qty-boxx">
                                    <label>qty :</label>
                                    <input type="text" placeholder="0">
                                    <button class="btn-cart lg-btn" type="submit" name="cart2">add to cart</button>
                                </div>
                            </div>
                            <div class="useful-links mb-20">
                                <ul>
                                    <li>
                                        <a href="product-details.php?wish=<?php echo $row['p_id']; ?>&&id=<?php echo $pid ?>"><i class="fa fa-heart-o"></i>add to wish list</a>
                                    </li>
									
                                    
                                </ul>
                            </div>
                            
                        
                        </div>
                    </div>
                </div>
				
				</form>
				<?php
							         $pid=$row['p_id'];
							         $qty=$row['qty'];
							         if(isset($_REQUEST['cart2'.$pid]))
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
											echo "<script>window.location.replace('product-details.php')</script>";
									}
										 
												   
									 
									 } 
									?>
								
            </div>
        </div>
    </div>
    <!-- product details wrapper end -->

    <!-- product details reviews start -->
    <div class="product-details-reviews pb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-info mt-half">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
							
							<li class="nav-item">
                                <a class="nav-link active" id="nav_review1" data-toggle="pill" href="#tab_review1" role="tab" aria-controls="tab_review1" 
								   aria-selected="true">Specifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="false">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Reviews (<?php 
									//$id1=$row['p_id'];
									$review="SELECT count(u_id) as countt FROM review WHERE p_id='$pid'";
									$row1=mysqli_query($con, $review);
									while($r1=mysqli_fetch_array($row1))
									{ echo $r1['countt']; } ?>)</a>
                            </li>
							
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade " id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                <p><?php echo $row['description'];?></p>
                            </div>
                            <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                <div class="product-review">
									<?php
	                              $qry="SELECT * FROM review";
							      $r=mysqli_query($con,$qry);
							      while($row1=mysqli_fetch_array($r))
								  { ?>
                                    <div class="customer-review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><strong><?php echo $row1['Name']?></strong></td>
                                                    <td class="text-right"><?php echo $row1['date']?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p><?php echo $row1['Review']?></p>
                                                        <div class="product-ratings">
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end of customer-review -->
									<?php } ?>
                                    <form method="post" class="review-form">
                                        <h2>Write a review</h2>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                <textarea class="form-control" name="review" required></textarea>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="buttons d-flex justify-content-end">
                                            <button name="btn4" class="btn-cart rev-btn" type="submit">Continue</button>
                                        </div>
                                    </form> <!-- end of review-form -->
									
									<?php 
						     
							if(isset($_REQUEST['btn4']))
							{
								$name = $_REQUEST['name'];
								$review = $_REQUEST['review'];
								$date = date('j/M/Y');

								$insert = "INSERT INTO 
								review(u_id,Name,Review,date,p_id) VALUES (NULL,'$name','$review','$date','$pid')";
								mysqli_query($con,$insert);
								echo "<script>window.location.replace('product-details.php?id=$pid')</script>";
							}
	                   ?>
                                </div> <!-- end of product-review -->
                            </div>
							<!--Specification area -->
							<div class="tab-pane fade active show" id="tab_review1" role="tabpanel" aria-labelledby="nav_review1">
                               
								 <div class="order-review">
									 
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
													
                                                    <tbody>
														<?php
													  $qry="SELECT * FROM specification WHERE p_id='$pid'";
													  $r=mysqli_query($con,$qry);
													  while($row1=mysqli_fetch_array($r))
													  { ?>
                                                        <tr class="cart-subtotal" >
                                                            <th style="background-color:#F7F7F7"><?php echo $row1['name']?></th>
                                                            <td class="text-left"><?php echo $row1['details']?></td>
                                                        </tr>
														<?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
									 
                                        </div>
                            </div>
							</div>
						   
                    </div>
                </div>
            </div>
        </div>
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
										
										echo "<script>window.location.replace('product-details.php?id=$pid')</script>";
									}
									
									?>
    <!--  Start related-product -->
    <div class="related-product-area mb-40">
        <div class="container-fluid">
            <div class="section-title">
                <h3><span>Related</span> product </h3>
            </div>
            <div class="flash-sale-active4 owl-carousel owl-arrow-style">
				
				<?php
	                              $qry="SELECT * FROM product";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
							  { ?>
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
                            <div class="label-product label_sale">
                                <span>-20%</span>
                            </div>
                        </div>
                        <div class="action-links">
                             <a href="product-details.php?wish1=<?php echo $row['p_id']; ?>&&id=<?php echo $pid ?>"><i class="fa fa-heart-o"></i>add to wish list</a>
                            <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                            
                        </div>
                    </div>
                    <div class="product-caption">
                        <div class="manufacture-product">
                            <p><a href="#"><?php echo $row['brand']?></a></p>
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
                            <span class="regular-price"><span class="special-price">$<?php echo $row['price']?></span></span>
                            <span class="old-price"><del>$<?php echo $row['s_price']?></del></span>
                        </div>
                        <button class="btn-cart" type="submit" name="cart5<?php echo $row['p_id']?>">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
                </form>
				<?php
							         $pid=$row['p_id'];
							         $qty=$row['qty'];
							         if(isset($_REQUEST['cart5'.$pid]))
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
											echo "<script>window.location.replace('product-details.php')</script>";
									}
										 
												   
									 
									 } 
									?>
				
				
					<?php } ?>
				<?php
									if(isset($_GET['wish1']))
									{
										$pid=$_GET['wish1'];
										$uid=$_SESSION['SESS-ID'];
										$status=0;
											
											$qrr= "INSERT INTO whishlist(whish_id, p_id, u_id, status) VALUES(null , '$pid' , '$uid' , '$status')";
											mysqli_query($con,$qrr);
										
										echo "<script>window.location.replace('product-details.php?id=$pid')</script>";
									}
									
									?>
            </div>
        </div>
    </div> 
    <!--  end related-product -->

   <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

   <?php include('Footer.php') ?>
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
                                                <li><a href="#">Write a Review</a></li>
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

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:02 GMT -->
</html>