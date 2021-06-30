<?php
session_start();
if(isset($_GET['invoice']))
{
	$invoice=$_GET['invoice'];
}
?>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
	<title>My Account || Sinrato</title>
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
	
	    <div class="ps-section--shopping ps-shopping-cart">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Order Detail</h1>
                </div>
				<div align="center" style="margin-bottom: 40px; margin-top: -30px;">
                    <h4>Invoice number <span style="color: #669900;"><b><?php echo $invoice; ?></b></span>  </h4>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table--shopping-cart ps-table--responsive">
                            <thead>
                                <tr>
									<th style="text-align: center">ID</th>
                                    <th style="text-align: left"><i class="fa fa-cart-plus"></i> PRODUCT NAME</th>
                                    <th style="text-align: center"><i class="fa fa-dollar"></i> PRICE</th>
                                    <th style="text-align: center"> QUANTITY</th>
                                    <th style="text-align: center"> TOTAL</th>
                                </tr>
                            </thead>
							
                            <tbody>
								<?php if(isset($_SESSION['SESS-ID'])){ 
							        $id= $_SESSION['SESS-ID'];
	                                 $ch = "SELECT * FROM cart WHERE status = '1' AND order_id='$invoice' AND u_id='$id'";
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
									<form method="post">
									<td align="center" data-label="ID"><b><?php echo $row['id'] ?></b></td>	
                                    <td data-label="Product">
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a href="product-full-content.php?id=<?php echo $r['p_id'] ?>"><img src="<?php echo $r['image'] ?>" alt=""></a></div>
                                            <div class="ps-product__content"><a href="product-full-content.php?id=<?php echo $r['p_id'] ?>"><?php echo $r['p_name'] ?></a>
                                                <p>Sold By:<strong> <?php echo $r['sold_by'] ?></strong></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-label="Price" style="text-align: center">$<?php echo $row['p_price'] ?></td>
                                    <td data-label="Quantity" style="text-align: center"><?php echo $row['p_qty'] ?></td>
                                    <td data-label="Total" style="text-align: center">$<?php echo $row['p_total'] ?></td>
										
                               
								</form>		
								</tr>
                             
									<?php 
								   }
								           }
                                         } 
							         ?>
								
								
								
								
                            </tbody>
                        </table>
                    </div>
					
					
					
					
					
                    <div class="ps-section__cart-actions"><a class="ps-btn ps-btn--outline" href="index.php"><i class="icon-arrow-left"></i> Back to Shop</a></div>
                </div>
                <div class="ps-section__footer">
                    <div class="row">
                       
                       
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--shopping-total">
                                <div class="ps-block__header">
                                    <p>Subtotal <span> $<?php 

										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(p_total) as p_tot FROM cart WHERE u_id='$id' AND order_id='$invoice' AND status='1'";
										$sumr=mysqli_query($con,$sum);
										while($sumrr=mysqli_fetch_array($sumr))
										{
											echo $sumrr['p_tot'];
										}
										
										?></span></p>
                                </div>
								<div class="ps-block__header">
                                    <p style="color: black;">Shipping <span> Free Shipping</span></p>
                                </div>
                                <div class="ps-block__content">
                                    
                                    <h3>Total <span>$<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(g_total) as g_tot FROM cart WHERE u_id='$id' AND order_id='$invoice' AND status='1'";
										$sumr=mysqli_query($con,$sum);
										while($sumrr=mysqli_fetch_array($sumr))
										{
											echo $sumrr['g_tot'];
										}
										
										?></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
	

	
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

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/my-account.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 10:57:25 GMT -->
</html>