<?php
	
	include("functions/function_prod.php")
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
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
	<!-- Contact Info -->
	
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
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
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!--Wishlist-->
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
					<div class="home_title">Product Details</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<li>Product Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Product -->

		<div class="product">
			<div class="container">
				<div class="row">
					<?php
				if(isset($_GET['prod_id'])){
        
        $product_id = $_GET['prod_id'];
        
        $get_product = "select * from products where p_id='$product_id'";
        
        $run_product = mysqli_query($db,$get_product);
        
        $row_product = mysqli_fetch_array($run_product);
        
        $p_cat_name = $row_product['p_cat'];
        
        $pro_name = $row_product['p_name'];
        
        $pro_price = $row_product['p_price'];
        
        $pro_desc = $row_product['p_desc'];
        
        $pro_img = $row_product['p_img'];
        
        $get_p_cat = "select * from product_categories where p_cat_name='$p_cat_name'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_name'];
       
		wishlist();
		add_cart();
            echo "
				
                <div class='col-lg-6'>
						<div class='product_image_slider_container'>
							<div id='slider' class='flexslider'>
								<ul class='slides'>
									<li>
										<img src='images/$pro_img' alt=''>
									</li>
									
								</ul>
							</div>
							
						</div>
					</div>

					<!-- Product Info -->
					<div class='col-lg-6 product_col'>
						<div class='product_info'>
							<div class='product_name'>$pro_name</div>
							<div class='product_category'>In $p_cat_name</a></div>
							
							<div class='product_price'>Rs $pro_price</div>
							
							<div class='product_text'>
								<p>$pro_desc</p>
							</div>
							
							<div class='product_buttons'>
                     
                         <div class='text-right d-flex flex-row align-items-start justify-content-start'>
                            
                             <div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'>
                             <form action='index.php?add_wish=$product_id' method='post'><button class='add-btn' name='wish'><div><div>WISHLIST</div></div></button></form>
                             </div>
                         
                             <div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>
                             <form action='index.php?add_cart=$product_id' method='post'><button class='add-btn' name='cart'><div><div>ADD TO CART</div></div></button> </form>
                             </div>
                         </div>
                     </div>
							
							
						</div>
					</div>";
        }
		?>

				
					
				
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="js/product.js"></script>
</body>
</php>