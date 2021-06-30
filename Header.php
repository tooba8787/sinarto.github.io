
<?php include('Connect.php') ?>
<header class="header-pos">
	
        <div class="header-top black-bg">
            <div class="container-fluid">
                <div class="row">
					
                    <div class="col-lg-8 col-12">
						<?php
	                              $qry="SELECT * FROM sinarto";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                        <div class="header-top-left">
                            <ul>
                                <li><span>Email: </span><?php echo $row['email']?></li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
						<?php } ?>
                    </div>
					
                    <div class="col-lg-4 col-12">
                        <div class="box box-right">
                            <ul>
                                <li class="settings">
									<?php if(isset($_SESSION['SESS-ID'])){?>
									<a class="ha-toggle" href="#">My Account<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="my-account.php">My Information</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
								<?php } else { ?>
                                    <a class="ha-toggle" href="#">My Account<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="login.php">Login</a></li>
                                    </ul>
									    <?php } ?>
                                </li>
      
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo-sinrato.png" alt="brand-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 order-sm-last">
                        <div class="header-middle-inner">
                            <form action="https://demo.hasthemes.com/sinrato-preview/sinrato/method">
                                
                                <input type="text" class="top-cat-field" placeholder="Search entire store here">
                                <input type="button" class="top-search-btn" value="Search">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 col-sm-8 order-lg-last">
                        <div class="mini-cart-option">
                            <ul>
								<?php if(isset($_SESSION['SESS-ID'])){?>
                                <li class="wishlist">
                                    <a class="ha-toggle" href="wishlist.php"><span class="lnr lnr-heart"></span><span class="count">
										<?php 
										   $id= $_SESSION['SESS-ID'];
										   $query = "SELECT whish_id FROM whishlist where u_id='$id' AND status='0'"; 
													$result = mysqli_query($con, $query); 
													if ($result) { 
														echo $row = mysqli_num_rows($result); 
													} 

										   ?>
										</span>Wishlist</a>
                                </li>
                                <li class="my-cart">
                                   <a class="ha-toggle" href="#"><span class="lnr lnr-cart"></span><span class="count">
										<?php 
										   $id= $_SESSION['SESS-ID'];
										   $query = "SELECT id FROM cart where u_id='$id' AND status='0'"; 
													$result = mysqli_query($con, $query); 
													if ($result) { 
														echo $row = mysqli_num_rows($result); 
													} 

										   ?>
									   </span>Cart</a>
                                    <ul class="mini-cart-drop-down ha-dropdown">
										
											<?php
							            $id= $_SESSION['SESS-ID'];
	                                 $ch = "SELECT * FROM cart WHERE status = '0' AND u_id='$id'";
								   $rr=mysqli_query($con,$ch);
								   while($row=mysqli_fetch_array($rr))
								   { 
									 $pid=$row['p_id'];
									   $qry = "SELECT * FROM product WHERE  p_id='$pid'";
								   $r1=mysqli_query($con,$qry);
								   while($r=mysqli_fetch_array($r1))
								   {	
										
										?>
                                        <li class="mb-30">
                                            <div class="cart-img">
                                                <a href="product-details.php?id=<?php echo $pid; ?>"><img alt="" src="<?php echo $r['image'] ?>"></a>
                                            </div>
                                            <div class="cart-info">
                                                 <h4><a href="product-details.php?id=<?php echo $pid; ?>"><?php echo $r['name'] ?></a></h4>
                                                <span> <span><?php echo $row['p_qty'] ?> x </span>Rs.<?php echo $row['p_price'] ?></span>
                                            </div>
                                            <div class="del-icon">
                                                <a href="Index.php?delete=<?php echo $row['id']; ?>"><i class="fa fa-times-circle"></i></a> 
                                            </div>
                                        </li>
										
										 <?php } } ?>		
										<?php
									if(isset($_GET['delete']))
									{
										$d=$_GET['delete'];
										$delete="DELETE FROM cart where id='$d'";
										mysqli_query($con,$delete);
										echo "<script>window.location.replace('Index.php')</script>";
									}
									
									?>
                                      
                                     <li>
                                            <div class="subtotal-text">Total: </div>
                                            <div class="subtotal-price"><span>Rs.
												<?php 
										$id= $_SESSION['SESS-ID'];
										$sum="SELECT sum(g_total) as g_tot FROM cart WHERE status = '0' AND u_id='$id'";
										$sumr=mysqli_query($con,$sum);
										while($s=mysqli_fetch_array($sumr))
										{
												echo $s['g_tot'];
										}?>
												
												
												</span></div>
                                        </li>
                                        <li class="mt-30">
                                            <a class="cart-button" href="cart.php">view cart</a>
                                        </li>
                                        <li>
                                            <a class="cart-button" href="checkout.php">checkout</a>
                                        </li>
                                    </ul>
                                </li>
								<?php } else { ?>
								
								<?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-menu theme-bg sticker">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-main-menu">
                            <div class="categories-menu-bar">
                                <div class="categories-menu-btn ha-toggle">
                                    <div class="left">
                                        <i class="lnr lnr-text-align-left"></i>
                                        <span>Browse categories</span>
                                    </div>
                                    <div class="right">
                                        <i class="lnr lnr-chevron-down"></i>
                                    </div>
                                </div>
                                <nav class="categorie-menus ha-dropdown">
                                    <ul id="menu2">
                                        
                                        <?php	
	                              $qry="SELECT * FROM brand";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                                  <li><a href="Home.php?id=<?php echo $row['b_id'];?>"><?php echo $row['name'];?></a></li>
								 <?php  }
										
										?>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="Index.php">HOME</a>
                                            
                                        </li>
                                        <li><a href="Index.php">SHOP</a>
										</li>
										<li><a href="contact-us.php">CONTACT US</a></li>
										<li class="static"><a href="about-us.php">About Us</a></li>
						 		   </ul>
                                </nav>
                            </div> <!-- </div> end main menu -->
                            <div class="header-call-action">
								<?php
	                              $qry="SELECT * FROM sinarto";
							      $r=mysqli_query($con,$qry);
							      while($row=mysqli_fetch_array($r))
								  { ?>
                                <p><span class="lnr lnr-phone"></span>Hotline : <strong><?php echo $row['phone']?></strong></p>
								 <?php  }
										
										?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
                </div>
            </div>
        </div>
    </header>