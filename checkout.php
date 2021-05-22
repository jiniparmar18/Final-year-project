
<?php 
	session_start();
	include("includes/db.php");
	include("functions/function_prod.php");
	?>

	<?php 


		if(isset($_POST['checkout'])){
		
			if(isset($_SESSION['c_email'])){
			$c_ip = getRealIpUser();
			$sel_cart = "select * from cart where ip_add='$c_ip'";

			$run_cart = mysqli_query($db,$sel_cart);
			
			$check_cart = mysqli_num_rows($run_cart);
			
				if($check_cart==0)
				{
				echo "<script>window.open('index.php','_self')</script>";
				}
				elseif(!isset($_SESSION['sub_total'])){

					echo "<script>window.open('index.php','_self')</script>";
				}
			
			}
				
				else{

					echo "<script>window.open('login.php','_self')</script>";

				}
			}
			
			
			?>
									 

<?php if(isset($_SESSION['login'])){
	unset($_SESSION['done']);
	?>	

<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
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
				<!--wishlist -->
				<div class="wish"><a href="wishlist.php"><div><img class="svg" src="images/heart.svg" alt="">
                    <div><?php wish_items();?></div></div></a></div>
				
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img src="images/cart.svg" alt=""><div><?php items();?></div></div></a></div>
				
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php 

						if(isset($_POST['done'])){
							
							$fname = $_POST['fname'];

							$lname = $_POST['lname'];
							
							$email = $_POST['email'];
							
							$city = $_POST['checkout_city'];
							
							$zipcode = $_POST['zipcode'];
							
							$contact = $_POST['phone_no'];
							
							$address_1= $_POST['add1'];

							$address_2= $_POST['add2'];
			
							$country = $_POST['checkout_country'];

							$_SESSION['f_name'] = $fname;
							$_SESSION['lname'] = $lname;
							$_SESSION['email'] = $email;
							$_SESSION['city'] = $city;
							$_SESSION['zipcode'] = $zipcode;
							$_SESSION['contact'] = $contact;
							$_SESSION['add1'] = $address_1;
							$_SESSION['add2'] = $address_2;

							$_SESSION['country'] = $country ;
							$submitform = $_POST['done'];
							$_SESSION['done'] = $submitform;
							
							$c_ip = getRealIpUser();
							$_SESSION['ip_add'] = $c_ip;
							
							
							$insert_billdetails = "insert into billing_details (firstname,lastname,email,city,country,add_1,add_2,phone,zip_code,c_ip) values ('$fname','$lname','$email','$city',' $country','$address_1','$address_2','$contact','$zipcode','$c_ip')";
							
							$run_customer = mysqli_query($db,$insert_billdetails);
						
						}

						

						?>


		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<form  id="checkout_form" class="checkout_form" method="post">
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" id="checkout_name" name="fname" class="checkout_input" pattern="^[a-zA-Z]+$" placeholder="First Name" required="required" value=<?php 
											if (!isset($_SESSION['f_name'])) { $_SESSION['f_name'] = ""; }
											echo $_SESSION['f_name'];?>>
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" id="checkout_last_name" name="lname" class="checkout_input" pattern="^[a-zA-Z]+$" placeholder="Last Name" required="required" value=<?php 
											if (!isset($_SESSION['lname'])) { $_SESSION['lname'] = ""; }
											echo $_SESSION['lname'];?>>
										</div>
									</div>
									
									<div>
										<!-- Country -->
										<select name="checkout_country" id="checkout_country"  class="dropdown_item_select checkout_input" require="required" value="selected">
											<option>Country</option>
											<option <?php 
											if (isset($_SESSION['country']) && $_SESSION['country']=='India')
											echo "selected";
											?>>India</option>
											<option <?php 
											if (isset($_SESSION['country']) && $_SESSION['country']=='US')
											echo "selected";
											?>>US</option>
											<option <?php 
											if (isset($_SESSION['country']) && $_SESSION['country']=='UK')
											echo "selected";
											?>>UK</option>
											
										</select>
									</div>
									<div>
										<!-- Address -->
										<input type="text" id="checkout_address" class="checkout_input"name="add1" placeholder="Address Line 1" required="required" value=<?php 
											if (!isset($_SESSION['add1'])) { $_SESSION['add1'] = ""; }
											echo $_SESSION['add1'];?>>
										<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" name="add2" placeholder="Address Line 2" required="required" value=<?php 
											if (!isset($_SESSION['add2'])) { $_SESSION['add2'] = ""; }
											echo $_SESSION['add2'];?>>
									</div>
									<div>
										<!-- Zipcode -->
										<input type="text" id="checkout_zipcode" class="checkout_input" name="zipcode" placeholder="Zip Code" pattern="^[0-9]{5,6}$" title="Invalid zip code" required="required"value=<?php 
											if (!isset($_SESSION['zipcode'])) { $_SESSION['zipcode'] = ""; }
											echo $_SESSION['zipcode'];?>>
									</div>
									<div>
										<!-- City / Town -->
										<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required" value="selected">
										<option>City / Town</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='Mumbai')
											echo "selected";
											?>>Mumbai</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='Pune')
											echo "selected";
											?>>Pune</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='Delhi')
											echo "selected";
											?>>Delhi</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='London')
											echo "selected";
											?>>London</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='Cambridge')
											echo "selected";
											?>>Cambridge</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='Manchester')
											echo "selected";
											?>>Manchester</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='New York City')
											echo "selected";
											?>>New York City</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='San Francisco')
											echo "selected";
											?>>San Francisco</option>
											<option <?php 
											if (isset($_SESSION['city']) && $_SESSION['city']=='Chicago')
											echo "selected";
											?>>Chicago</option>
										</select>
									</div>
									
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" class="checkout_input" name="phone_no" placeholder="Phone No." pattern="^[0-9]{10}$" title="Invalid phone number" required="required" value=<?php 
											if (!isset($_SESSION['contact'])) { $_SESSION['contact'] = ""; }
											echo $_SESSION['contact'];?>>
									</div>
									<div>
										<!-- Email -->
										<input type="phone" id="checkout_email" class="checkout_input" name="email" placeholder="Email" pattern="^[a-z.]+[0-9]*@(.+)$" title="Invalid email address" required="required" value=<?php 
											if (!isset($_SESSION['email'])) { $_SESSION['email'] = ""; }
											echo $_SESSION['email'];?>>
									</div>
									<div>
										<!-- submit -->
										<button type="submit" class="checkout_done" name="done" required="required">DONE</button>
									</div>
									
								</form>
							</div>
						</div>
					</div>
					
						<?php
						 $amount=$_SESSION['sub_total'];
						 $total_amount=$_SESSION['total'];

						
						 

							$discount = 100;
						
							if(isset($_POST['coupon_apply'])){
								if($total_amount>500||$total_amount==500){

								if($_POST['code']=="get100"){
									
									$amount= $amount-$discount;
									$total_amount=$total_amount-$discount;
									echo"<script>alert('Coupon Applied')</script>";
									
								
									

								}else{

									$amount= $amount;
									$total_amount=$total_amount;
									echo"<script>alert('Coupon Not Valid')</script>";

								}
								
								}
							else{
								echo"<script>alert('Coupon Not Valid')</script>";
							}
						}

								$_SESSION['total']=$total_amount;
									
									
						?>

					<!-- Cart Total -->
					
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $amount; ?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto"><?php echo  $_SESSION['shipping'] ?></div>
									</li> 
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total Amount</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $total_amount; ?></div>
									</li>
								</ul>

								
								<?php 
									
									$session_email = $_SESSION['c_email'];
									
									$select_customer = "select * from customers where c_email='$session_email'";
									
									$run_customer = mysqli_query($db,$select_customer);
									
									$row_customer = mysqli_fetch_array($run_customer);
									
									$customer_id = $row_customer['c_id'];
									
									?>

									<div class="coupon">
									<div class="checkout_title">Coupon code</div>
									<div class="coupon_form_container">
									<form action="#" id="coupon_form" class="coupon_form" method="post">
										<input type="text" class="coupon_input" name="code" autocomplete="off" required="required">
										<button type="submit" class="coupon_button" name="coupon_apply">apply</button>
									</form>
								</div>
								</div>
								
    
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<form  action="order.php?c_id=<?php echo $customer_id ?>" method="post">
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="payment_radio" class="payment_radio" value="PayOnline" required="required">
												<span class="radio_mark"></span>
												<span class="radio_text">Pay Online</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio" value="Cash on Delivery" required="required"> 
												<span class="radio_mark"></span>
												<span class="radio_text">Cash on Delivery</span>
											</label>
										</li>
										
									</ul>
									
								</div>
								
								<div class="cart_text">
								</div>
								<button class="btn-placeorder" name="placeorder">
								<div class="checkout_button trans_200"><a>PLACE ORDER</a></div></button>
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
											<div>Little Closet</div>
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
<script src="js/checkout.js"></script>
</body>
</html><?php
					}
					?>