<?php 
session_start();
$conn= mysqli_connect("127.0.0.1:3307","root","","ecom_store");
?> 
<?php if(isset($_SESSION['adminlogin'])){?>	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Delete</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href="./../images/logo_1.png">
<link rel="stylesheet" type="text/css" href="./../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./../plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="responsive_admin.css">
<style>
.panel{
        max-width:600px;
        width: 100%;
        height:500px;
        background: #fff;
        margin: 40px auto;
        box-shadow: 10px 20px 30px rgba(0,0,0,0.5);
        padding: 30px;
        margin-top: 50px;
        background-color:#d5dbd9;
      
    }
    form{
        margin-left:55px;

    }.panel-title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 40px;
        color: #4a4a4a;
        text-transform: uppercase;
        text-align: center;
        padding-top: 25px;
    }
    .form-group,{
        font-size: 20px;
        font-weight: 600;
        color: #4a4a4a;
        margin-bottom: 20px;

    }
    label{
        font-size: 18px;
        font-weight: 600;
        color: #4a4a4a;
        
        display:initial!important;
        padding-right:0px !important;
        padding-left:0px !important;
      

    }
    input,.form-control{
        width: 400px;
        outline: none;
        border: 1px solid #d5dbd9;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.3s ease;
        margin-bottom: 20px;
        margin-top:10px;
    }
    .btn{
        width:125px;
        height:auto;
        background-color:#4a4a4a;
        color:#ffff;
        font-size:16px;
        outline:none;
    }
    .btn:hover{
        background-color:#2fce98;   
        border-color:transparent;
    }
    body{
        background:	#606060;
    }
    @media (max-width:420px) {
    .panel{
        margin-top:20px;
        width: 350px;
        height: auto;
    }
    form{
        margin-left:15px;

    }
    .form-control{
        width:100%;
    }
    .panel .form-group .form-control{
        flex-direction: column;
        align-items: flex-start;
    }
    .panel .form-group .form-control label{
        margin-bottom: 5px;
    }
    .panel .form-group .form-control.terms{
        flex-direction: row;
    }
    .btn{
        width:110px;
        font-size:14px;
    }
    .btn:hover{
        background-color:#2fce98 !important;   
    }

    }
    </style>
</head>
<body>
<!-- Menu -->

<div class="menu">

	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="insert.php">Insert Products</a></li>
			<li><a href="delete.php">Delete Products</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
                    <div><img src="./../images/adminlogo.jpg"></div>
						<div>Admin Panel</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="insert.php">Insert Products</a></li>
                <li><a href="delete.php">Delete Products</a></li>
                <li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			
		</div>
	</header>
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Delete Product</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						
					</div>
				</div>
			</div>
		</div>
  
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title" >
                   
               
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">

               <div class="form-group">
                       
                      <label class="col-md-3 control-label">Product ID</label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_id" type="text" class="form-control" required="required">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label">Product Name </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_name" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label">Product Category </label> 
                      
                      <div class="col-md-6">
                          
                          <select name="product_cat" class="form-control">
                              
                              <option> Select Category  </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from product_categories";
                              $run_p_cats = mysqli_query($conn,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_name = $row_p_cats['p_cat_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_name'> $p_cat_name </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                          
                      </div>
                       
                   </div>
                
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Delete Product" type="submit" class="btn btn-primary form-control">
                          
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->

                   
<script src="./../js/jquery-3.2.1.min.js"></script>
<script src="./../styles/bootstrap-4.1.2/popper.js"></script>
<script src="./../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="./../plugins/greensock/TweenMax.min.js"></script>
<script src="./../plugins/greensock/TimelineMax.min.js"></script>
<script src="./../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./../plugins/greensock/animation.gsap.min.js"></script>
<script src="./../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="./../plugins/easing/easing.js"></script>
<script src="./../plugins/progressbar/progressbar.min.js"></script>
<script src="./../plugins/parallax-js-master/parallax.min.js"></script>
<script src="./../js/custom.js"></script>        
    
</body>
</html>
<?php }?>

<?php
if(isset($_POST['submit'])){
    
    $prod_id = $_POST['product_id'];
    $prod_name = $_POST['product_name'];
    $prod_cat = $_POST['product_cat'];

    $delete_query = "delete from products where p_name='$prod_name' and p_id= '$prod_id'";

    $run_query= mysqli_query($conn,$delete_query);

    if($run_query){
        echo"<script>alert('Product has been deleted successfully')</script>";
        echo"<script>window.open('delete.php','self') </script>";
    }
}
?>
