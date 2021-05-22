<?php 
include("includes/db.php"); 
include("functions/function_prod.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/category.css">
<link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
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
						<div>LittleCare</div>
					</div>
				</a>	
			</div>
			<div class="navi"><i class="navbars" aria-hidden="true"></i></div>
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
				<!--Wishlist-->
				<div class="wish"><a href="wishlist.php"><div><img class="svg" src="images/heart.svg" alt="">
                <div><?php wish_items();?></div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img class="svg" src="images/cart.svg" ><div><?php items();?></div></div></a></div>
				
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Men Category</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<li><a href="mencategory.php">Men</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row products_bar_row">
					<div class="col">
						<div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
							<div class="products_bar_links">
								<ul class="d-flex flex-row align-items-start justify-content-start">
								<?php 
									getCats2();
									?>
								</ul>
							</div>
							<div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
								<div class="products_dropdown product_dropdown_sorting">
									<div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
									</ul>
								</div>
								
								<div class="products_dropdown text-right product_dropdown_filter">
									<div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_filter_btn" data-filter="*">All</li>
										<li class="item_filter_btn" data-filter=".dry">Dry</li>
										<li class="item_filter_btn" data-filter=".oily">Oily</li>
										<li class="item_filter_btn" data-filter=".combination">Combination</li>
										<li class="item_filter_btn" data-filter=".sensitive">Sensitive</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row products_row products_container grid ">
				<?php
                                                
						global $db;
						$per_page = 6;
						
						if(isset($_GET['cat'])){
							
							$cat_name = $_GET['cat'];
							
							if(isset($_GET["page"]))
							{
								$page= $_GET["page"];
							}
							else{
								$page = 1;
							}

							$start_from = ($page-1)*$per_page;

							$get_cat_id ="select * from categories where cat_name='$cat_name'";
							
							$run_cat_id = mysqli_query($db,$get_cat_id);
							
							$row_cat_id = mysqli_fetch_array($run_cat_id);
							
							$cat_id= $row_cat_id['cat_id'];

							$query = "SELECT * FROM products  where p_cat='Men'and cat_id=$cat_id LIMIT $start_from,$per_page";

							$result = mysqli_query($db, $query);
							
							
							while($row_products=mysqli_fetch_array($result)){
								
								$pro_id = $row_products['p_id'];

								$pro_cat = $row_products['p_cat'];
							
								$pro_name = $row_products['p_name'];

								$pro_price = $row_products['p_price'];

								$pro_img = $row_products['p_img'];
								
								$pro_filter = $row_products['p_filter'];

								wishlist2();

								add_cart2();
								
								echo "<div class='col-xl-4 col-md-6 grid-item $pro_filter'>
								<div class='product'>
									<div class='product_image'><img src='images/$pro_img' alt=''></div>
									<div class='product_content'>
										<div class='product_info d-flex flex-row align-items-start justify-content-start'>
											<div>
												<div>
													<div class='product_name'><a href='product.php?prod_id=$pro_id'>$pro_name</a></div>
													<div class='product_category'>In <a href='category.php'>$pro_cat</a></div>
												</div>
											</div>
											<div class='ml-auto text-right'>
												<div class='product_price text-right'>Rs $pro_price<span></span></div>
											</div>
										</div>
										<div class='product_buttons'>
											<div class='text-right d-flex flex-row align-items-start justify-content-start'>
                            
											<div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'>
										<form action='mencategory.php?add_wish=$pro_id' method='post'><button class='add-btn' name='wish'><div><div>WISHLIST</div></div></button></form>
										</div>
									
										<div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>
										<form action='mencategory.php?add_cart=$pro_id' method='post'><button class='add-btn' name='cart'><div><div>ADD TO CART</div></div></button> </form>
										</div>
								
										</div>
									    </div>
										</div>
										</div>
									</div>
						
						
						";
								

							}
							
						}
						else{
							if(isset($_GET["mpage"]))
							{
								$page= $_GET["mpage"];
							}
							else{
								$page = 1;
							}

							$start_from = ($page-1)*$per_page;
							
							$query = "SELECT * FROM products  where p_cat='Men' LIMIT $start_from,$per_page";

							$result = mysqli_query($db,$query);
							
							while($row_products=mysqli_fetch_array($result)){
								
								$pro_id = $row_products['p_id'];

								$pro_cat = $row_products['p_cat'];
							
								$pro_name = $row_products['p_name'];

								$pro_price = $row_products['p_price'];

								$pro_img = $row_products['p_img'];

								$pro_filter = $row_products['p_filter'];

								wishlist2();

								add_cart2();
								
								echo "<div class='col-xl-4 col-md-6 grid-item $pro_filter'>
								<div class='product'>
									<div class='product_image'><img src='images/$pro_img' alt=''></div>
									<div class='product_content'>
										<div class='product_info d-flex flex-row align-items-start justify-content-start'>
											<div>
												<div>
													<div class='product_name'><a href='product.php?prod_id=$pro_id'>$pro_name</a></div>
													<div class='product_category'>In <a href='category.php'>$pro_cat</a></div>
												</div>
											</div>
											<div class='ml-auto text-right'>
												<div class='product_price text-right'>Rs $pro_price<span></span></div>
											</div>
										</div>
										
										<div class='product_buttons'>
											<div class='text-right d-flex flex-row align-items-start justify-content-start'>
                            
											<div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'>
										<form action='mencategory.php?add_wish=$pro_id' method='post'><button class='add-btn' name='wish'><div><div>WISHLIST</div></div></button></form>
										</div>
									
										<div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>
										<form action='mencategory.php?add_cart=$pro_id' method='post'><button class='add-btn' name='cart'><div><div>ADD TO CART</div></div></button> </form>
										</div>

										</div>
									    </div>
										</div>
										</div>
									</div>
						
							
						
						
						";
								
							}
							
						}
				?>
				
				</div>

				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
                            
				            <?php
                             
                                    $query = "select * from products where p_cat='Men'";
                                            
                                    $result = mysqli_query($db,$query);
                                            
                                    $total_records = mysqli_num_rows($result);
                                            
                                    $total_pages = ceil($total_records / $per_page);

					
                                    for($i=1; $i<=$total_pages; $i++){
                                    
                                    echo "
                                
                                    <li>
                                    
                                        <a href='mencategory.php?mpage=".$i."'> ".$i." </a>
                                    
                                    </li>
                                
                                ";  
                                    
									}
                                    
                               
                            ?> 
                             
								
							</ul>
                            
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
											<div>LittleCare</div>
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/category.js"></script>
</body>
</html>