<?php 
	session_start();
	include("functions/function_prod.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wishlist</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/wishlist.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
	<form action="searchproducts.php" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="category.php">Women</a></li>
			<li><a href="mencategory.php">Men</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	
	
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="index.php">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/logo_1.png" alt=""></div>
						<div>Little Care</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="category.php">Women</a></li>
					<li><a href="mencategory.php">Men</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			
        </header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>


		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Wishlist</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<li>Your Wishlist</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php 
                       
                       $ip_add = getRealIpUser();
                       
                       $select_wishlist = "select * from wishlist where ip_add='$ip_add'";
                       
                       $run_wishlist = mysqli_query($db,$select_wishlist);
                       
                       $count = mysqli_num_rows($run_wishlist);
                       
                       ?>

		<!-- Cart -->


		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
						
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Product</li>
									<li>Price</li>
									<li>Add</li>
									<li>Delete</li> 
								</ul>
							</div>

							<?php
							if($count==0){
								echo"
								<div class='cart_items'>
								<ul class='cart_items_list'>
								<li class='cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start'>
										<div class='product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto'>
											<div><div class='product_number'></div></div>
											<div><div class='product_image'> </div></div>
											<div class='product_name_container'>
												<div class='product_name'>No Product In Your Cart</div>
												<div class='product_text'></div>
											</div>
										</div>
										
										<div class='product_price product_text'><span>Price: </span></div>
										<div class='product_quantity_container'>
										
									
										</div>
										<div class='product_total product_text'><span>Total: </span></div>
									</li>
								</ul>
							</div>";
									   
							}
							
							?>
							

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">
									<?php 
									wishlist();
									?>
								<?php 
                                   $total = 0;
								   $i=1;
								
                                   while($row_wishlist = mysqli_fetch_array($run_wishlist)){
                                       
                                      $pro_id = $row_wishlist['p_id'];                                     
                                       
                                       //$pro_qty = $row_cart['qty'];
                                       
                                       $get_products = "select * from products where p_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($db,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
										
                                           
                                           $product_name = $row_products['p_name'];
                                           
                                           $product_img = $row_products['p_img'];
                                           
                                           $only_price = $row_products['p_price'];
                                           
                                      
                                   ?>


									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											<div><div class="product_number"><?php echo $i; ?></div></div>
											<div><div class="product_image"><img src="images/<?php echo $product_img;?>" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.php?prod_id=<?php echo $pro_id; ?>"><?php echo $product_name?></a></div>
												<div class="product_text"></div>
											</div>
										</div>
										
										<div class="product_price product_text"><span>Price: </span>Rs <?php echo $only_price?></div>
										<div class="product_quantity_container">

										<?php add(); ?>

											<form action="wishlist.php?add_cart=<?php echo $pro_id;?>" method="post"><button name="cart" class="addcart-btn">ADD</button></form>
										
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center" >
												
                                       </div>
										</div>
                                        
										<div class="product_total product_text">								
											<form action="wishlist.php?delete=<?php echo $pro_id;?>" method="post"><button name="delete" class="deletelist-btn">DELETE</button></form>
											
										</div> 
									</li>
								</ul>
								
							<?php $i++; } } ?>
							<?php
								function delete_wishlist(){
												
									global $db;
												
										if(isset($_POST['delete'])){

											$p_id = $_GET['delete'];
										
											$delete_list = "delete from wishlist where p_id=$p_id";

											$run_delete_list= mysqli_query($db,$delete_list);

											echo"$run_delete_list";
														
											if($run_delete_list){
															
												echo "<script>window.open('wishlist.php','_self')</script>";
															
											}
														
										}
													
								}
									echo @$up_cart = delete_wishlist();
											
								
							?>
							

							<!-- Cart Buttons -->
							<form method="post">
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<button class="btn_clear" ><div class="button button_clear trans_200"><a href="cart.php">go to cart</a></div></button>
									<button class="btn_clear"><div class="button button_continue trans_200"><a href="index.php">continue shopping</a></div></button>
								</div>
							</div>
							</form>
				
						</div>
					</div>
				</div>
				
			</div>
		</div> 
		
        </div>
		  

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>Little Care</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Great skin is possible with the right skin care, routine and consistency. Lets talk about it!</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									
									<li>
										<a href="aboutus.php"><div>About Us</div></a>
									</li>
									<li>
										<a href="contact.php"><div>Contact</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Stay in Touch</div>
								
								
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
	</div>
		
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>