<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
<title>Cart || Sinrato</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start cart Wrapper -->
    <div class="shopping-cart-wrapper pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="shopping-cart">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                       <h3>Shopping Cart</h3>
                                    </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Image</td>
                                                        <td>Product Name</td>
                                                        <td>Quantity</td>
                                                        <td>Unit Price</td>
                                                        <td>Total</td>
														<td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
											<?php
							            $id= $_SESSION['SESS-ID'];
	                                 $ch = "SELECT * FROM cart WHERE status = '0' AND u_id='$id'";
								   $rr=mysqli_query($con,$ch);
								   while($row=mysqli_fetch_array($rr))
								   {
									   $pid=$row['p_id'] ;
									   $qry = "SELECT * FROM product WHERE  p_id='$pid'";
								   $r1=mysqli_query($con,$qry);
								   while($r=mysqli_fetch_array($r1))
								   {
							         ?>		
                                                    <tr>
													
                                    <form>	
                                                        <td>
                                                            <a href="product-details.php?id=<?php echo $pid; ?>"><img src="<?php echo $r['image'] ?>" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                                                        </td>
                                                        <td>
                                                            <a href="product-details.php?id=<?php echo $pid; ?>"><?php echo $r['name'] ?></a>
                                                        </td>
                                                        <td>
                                                            <div class="input-group btn-block">
                                                                <div class="product-qty mr-3">
                                                                    <input type="text" name="qnty1" value="<?php echo $row['p_qty'] ?>">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Rs.<?php echo $row['p_price'] ?></td>
														<td>Rs.<?php echo $row['p_total'] ?></td>
														<td>
                                                            <div class="input-group btn-block">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" name="upd<?php echo $row['p_id'] ?>" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                                                    <button type="submit" name="del<?php echo $row['p_id'] ?>" class="btn btn-danger pull-right"><i class="fa fa-times-circle"></i></button>
                                                                </span>
                                                            </div>
                                                        </td>
                                    </form>
														
                                                    </tr>
													
													
										 <?php 
	                                  $pid=$row['p_id'];
									  if(isset($_REQUEST['upd'.$pid]))
									   {
										       $uid=$_SESSION['SESS-ID'];
											   
										            $qnty=$_REQUEST['qnty1'];
										            $p_price=$row['p_price'];
													$p_total=$p_price*$qnty;
													$p_tax=0;
													$p_ship=0;
													$g_total=$p_ship+$p_total+$p_tax;
                                                     $q = "UPDATE cart SET p_qty = '$qnty', p_total='$p_total', g_total='$g_total' WHERE  u_id = '$uid' AND p_id = '$pid'";
													 mysqli_query($con,$q);
										  	
										    $qty=$row['p_qty'];
										 
										  if($qnty<$qty)
										  {
											  $sub=$qty-$qnty;
											  $rr=$r['qty']+$sub;
											  $qry = "UPDATE product SET qty = '$rr' WHERE  p_id ='$pid'";
					                     	mysqli_query($con,$qry);
										  }
										  else
										  {
											  
										    $qty=$qnty - $qty;
											 if($qty<0)
										  {
											  $qty= -1 * $qty;
											  
											  
										  }  
											$lastquantity= $r['qty'] -  $qty;
										  	$qry = "UPDATE product SET qty = '$lastquantity' WHERE  p_id ='$pid'";
					                     	mysqli_query($con,$qry);
										  }
										  
										  echo "<script>window.location.replace('cart.php')</script>";
									   }
									   ?>		
									     
													
													<?php
									 if(isset($_REQUEST['del'.$pid]))
									{
										$id=$row['id'];
										$delete="DELETE FROM cart where id='$id'";
										mysqli_query($con,$delete);
										echo "<script>window.location.replace('cart.php')</script>";
									}
									
									?>				
                                    <?php } } ?>  
                                                </tbody>
                                            </table>
                                        </div>
									

                                    <div class="cart-amount-wrapper">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                <table class="table table-bordered">
                                                    <tbody>
														
                                                        <tr>
                                                            <td><strong>Sub-Total:</strong></td>
                                                            <td>Rs.<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(p_total) as p_tot FROM cart WHERE status = '0' AND u_id='$id'";
										$sumr=mysqli_query($con,$sum);
										while($s=mysqli_fetch_array($sumr))
										{
												echo $s['p_tot'];
										}?></td>
                                                        </tr>
                                                        <tr>
									                        <td><strong>Shipping:</strong></td>
                                                            <td><span class="color-primary">Free Shipping</span></td>
															
														</tr>
                                                        <tr>	
                                                            <td><strong>Total:</strong></td>
                                                            <td><span class="color-primary">Rs.<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(g_total) as g_tot FROM cart WHERE status = '0' AND u_id='$id'";
										$sumr=mysqli_query($con,$sum);
										while($s=mysqli_fetch_array($sumr))
										{
												echo $s['g_tot'];
										}?></span></td>
                                                        </tr>
												
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                        <a href="Index.php" class="btn btn-secondary">Continue Shopping</a>
                                        <a href="checkout.php" class="btn btn-secondary dark align-self-end">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of shopping-cart -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End cart Wrapper -->

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
</html>