<?php 
	session_start();
	include("functions/function_prod.php");
	include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
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
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
				<form id="header_search_form" action="searchproducts.php" method="post">
						<input type="text" class="search_input" placeholder="Search Item" name="str" required="required">
						<button type="submit" class="header_search_button" name="submit"><img src="images/search.png" alt=""></button>
					</form>
					
				</div>
				
				<!-- User -->
				<!-- <div class="user"><a href="user.php"><div><img src="images/user.svg" alt=""></div></a></div> -->
				<!-- Cart -->
				<div class="wish"><a href="wishlist.php"><div><img class="svg" src="images/heart.svg" alt=""><div><?php wish_items();?></div></div></a></div>
				<!-- Register-->
				<!-- <div class="regi"><a href="registeration.php">Register</a></div> -->
            </div>
        </header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>


		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php 
                       
                       $ip_add = getRealIpUser();

					   $_SESSION['ip_add'] = $ip_add;

                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($db,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                       
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
									<li>Quantity</li>
									<li>Total</li>
								</ul>
							</div>
							

							<!-- Cart Items -->
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
							<div class="cart_items">
								<ul class="cart_items_list">
									<?php 
									add_cart();
									
									?>
								
								<?php 

								$shipping_cost=0;
								echo"
								<script>
								localStorage.setItem('shipping_radio','standard');
								</script>";
								
								if(isset($_POST['shipping_button'])){

									if($_POST['shipping_radio']=="nextday"){
										
									$shipping_cost=150;
									// // echo"$shipping_cost nextday";
										echo"
									<script>
									localStorage.setItem('shipping_radio','nextday');
									</script>";
									
					
									}else{
					
									$shipping_cost=0;
									// echo"$shipping_cost standard";
										echo"
									<script>
									localStorage.setItem('shipping_radio','standard');
									</script>";
								
									}
								}
		 
                                   
                                   $total = 0;
								   $i=1;
								   $grandtotal=0;

								  
								  
										
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                      $pro_id = $row_cart['product_id'];                                     
                                       
                                       $pro_qty = $row_cart['qty'];
                                       
                                       $get_products = "select * from products where p_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($db,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
										
                                           
                                           $product_name = $row_products['p_name'];
                                           
                                           $product_img = $row_products['p_img'];
                                           
                                           $only_price = $row_products['p_price'];
                                           
                                           $sub_total = $row_products['p_price']*$pro_qty;
                                           
                                           $total += $sub_total;
 
                                           
                                   ?>
								  
									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											<div><div class="product_number"><?php echo $i; ?></div></div>
											<div><div class="product_image"><img src="images/<?php echo $product_img;?>" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.php?prod_id=<?php echo $pro_id; ?>"><?php echo $product_name?></a></div>
												<div class="product_text">Second line for additional info</div>
											</div>
										</div>
										
										<div class="product_price product_text"><span>Price: </span>Rs <?php echo $only_price?></div>
										<div class="product_quantity_container">
										
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center" >
												<span class="product_text product_num"><?php echo $pro_qty;?></span>
												<form action="cart.php?less=<?php echo $pro_id;?>&prod_qty=<?php echo $pro_qty-1;?>" method="post"><div class="qty_sub qty_button trans_200 text-center"><span><button type="hidden" class="btn_qty">-</button></span></div></form>
												<form action="cart.php?more=<?php echo $pro_id;?>&prod_qty=<?php echo $pro_qty+1;?>" method="post"><div class="qty_add qty_button trans_200 text-center"><span><button type="hidden" class="btn_qty">+</button></span></div></form>
											</div>
									
										</div>
										<div class="product_total product_text"><span>Total: </span>Rs <?php echo $sub_total?></div>
										
									</li>
								</ul>
						
							<?php $i++; } } 
							$grandtotal=  $total+$shipping_cost;
							?>
							</div>
						
							
							

							<!-- Cart Buttons -->
							
							<form method="post">
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<button class="btn_clear" name="clear"><div class="button button_clear trans_200"><a>clear cart</a></div></button>
									<button class="btn_clear"><div class="button button_continue trans_200"><a href="index.php">continue shopping</a></div></button>
								</div>
							</div>
							</form>
							<?php 
							  
               
								function clear_cart(){
									
									global $db;

									if(isset($_POST['clear'])){
										 
										
											$clear_product = "delete from cart";

											$run_clear_product = mysqli_query($db,$clear_product);
											
											if($run_clear_product ){
												
												echo "<script>window.open('cart.php','_self')</script>";
												
											}
											
										}
										
									}
									
								echo @$up_cart = clear_cart();
								
							?>

						</div>
					</div>
				</div>
				
				<div class="row cart_extra_row">
					<div class="col-lg-6">
						<div class="cart_extra cart_extra_1">
							<div class="cart_extra_content cart_extra_coupon">
								
								
								
								
								
									
								<div class="coupon_text"></div>
								<div class="shipping">
																		

									<div class="cart_extra_title">Shipping Method</div>
									<ul>
									<form action="cart.php" id="shipping_form" class="shipping_form" method="post">
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio" value="nextday">
												<span class="radio_mark"></span>
												<span class="radio_text">Next day delivery</span>
											</label>
											<div class="shipping_price ml-auto">Rs 150</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio"  value="standard" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Standard delivery</span>
											</label>
											<div class="shipping_price ml-auto">Free</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<button class="shipping_button" name="shipping_button">apply</button>
										</li>
									</form>
									<script>
									$(document).ready(function(){
										var radios = document.getElementsByName("shipping_radio");
										var val = localStorage.getItem('shipping_radio');
										for(var i=0;i<radios.length;i++){
											if(radios[i].value == val){
											radios[i].checked = true;
											}
										}
										$('input[name="shipping_radio"]').on('change', function(){
											localStorage.setItem('shipping_radio', $(this).val());
										
										});

											

										});
									</script>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php 

						if(isset($_POST['shipping_button'])){

							$ip = getRealIpUser();
							
							$shipping_radio = $_POST['shipping_radio'];

							$query_1= "insert into cart_total (shipping_mode,ip_add) values ('$shipping_radio','$ip')";

							$run_query_1 = mysqli_query($db,$query_1);
						}

					?>
					
					<div class="col-lg-6 cart_extra_col">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Cart Total</div>
								
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Sub Total</div>
										<div class="cart_extra_total_value ml-auto">Rs <?php echo $total;?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $shipping_cost;?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">Rs <?php echo $grandtotal;?></div>
									</li>
								</ul>
								
								<div class="checkout_button trans_200">
								<form action="checkout.php" method="post">
								<button class="btn-checkout" name="checkout"><a>proceed to checkout</a></button>
								</form>
								<?php
								 $_SESSION['sub_total'] = $total;
								$_SESSION['total'] =  $grandtotal;
								$_SESSION['shipping'] = $shipping_cost;
									// unset($_SESSION['shipping']);

									?>
								
								</div>
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