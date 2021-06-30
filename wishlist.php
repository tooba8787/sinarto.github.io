<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:02 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>Wishlist || Sinrato</title>
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
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of wishlist Wrapper -->
    <div class="wishlist-wrapper mb-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="wishlist">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Wishlist</h3>
                                    </div>
                                    <form action="#">
                                        <div class="table-responsive text-center wishlist-style">
                                            <table class="table table-bordered">
                                                <thead>

                                                    <tr>
                                                        <td>Image</td>
                                                        <td>Product Name</td>
                                                        <td>Stock</td>
                                                        <td>Unit Price</td>
                                                        <td>Action</td>
                                                    </tr>
                                                </thead>
                                               <tbody>
													<?php if(isset($_SESSION['SESS-ID'])){ 
							            $id= $_SESSION['SESS-ID'];
	                                 $ch = "SELECT * FROM whishlist WHERE u_id='$id'";
								   $rr=mysqli_query($con,$ch);
								   while($row=mysqli_fetch_array($rr))
								   {
									   $pid=$row['p_id'] ;
									   $qry = "SELECT * FROM product WHERE  p_id='$pid'";
								   $r1=mysqli_query($con,$qry);
								   while($r=mysqli_fetch_array($r1))
								   {
							         ?>
													<form method="post">
													
                                                    <tr>
                                                        <td>
                                                            <a href="product-details.php?id=<?php echo $r['p_id'] ?>"><img style="width: 100px; height: 100px;" src="<?php echo $r['image'] ?>" alt="Wishlist Product Image" title="Compete Track Tote"></a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.php?id=<?php echo $r['p_id'] ?>"><?php echo $r['name'] ?></a>
                                                        </td>
                                                        <td>
														<?php 
															 $q=$r['qty'];
														   if($q<=0)
														   {
                                                               echo "Out Of Stock";
														   }
														   else{
                                                               echo "Available";
														   }?>
														
														
														</td>
                                                        <td>
                                                            <div class="price"><strong>$
																<?php 
																		 $p=$r['s_price'];
																	   if($p<=0)
																	   {
																		   echo $r['price'];
																	   }
																	   else
																	   {
																		  echo $r['s_price']; 
																	}?>
																
																</strong></div>
                                                        </td>
                                                        <td>
                                                            <button type="submit" name="cart1<?php echo $r['p_id']?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>
                                                            <a onClick="return confirm('Do you want to remove this item from wishlist?')" href="wishlist.php?delete=<?php echo $row['whish_id']; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                        </td>
														
                                                    </tr>
													
													</form>
									  <?php
							         $pid=$r['p_id'];
							         $qty=$r['qty'];
							         if(isset($_REQUEST['cart1'.$pid]))
									 {
							               $uid=$_SESSION['SESS-ID'];
							               $o_id=0;
							               if($r['s_price']<=0)
										   {
							                  $p_price=$r['price'];
										   }
							               else
										   {
											   $p_price=$r['s_price'];
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
											echo "<script>window.location.replace('wishlist.php')</script>";
									}
										 
												   
									 
									 } 
									?>				
													<?php
									if(isset($_GET['delete']))
									{
										$d=$_GET['delete'];
										$delete="DELETE FROM whishlist where whish_id='$d'";
										mysqli_query($con,$delete);
										echo "<script>window.location.replace('wishlist.php')</script>";
									}
									
									?>
                                                
								<?php } } } ?>					
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end of wishlist -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of wishlist Wrapper -->

   <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

  <?php include('Footer.php') ?>

	<!-- all js include here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:02 GMT -->
</html>