<?php
  session_start();
  include("functions/function_prod.php");
  include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "icon" href="images/logo_1.png" >
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <title>Login</title>
  <link rel="stylesheet" href="styles/login.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Login 
    </div>
    <div class="form">
    <form class="registration" method="post">
        <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input" pattern="^[a-z.]+[0-9]*@(.+).[a-z.]+$" title="Invalid email address"  name="c_email">
        </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$"
           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="c_pass">
       </div>  
 
      <div class="inputfield">
      <input type="submit" name="login" value="Login" class="btn">  
      </div>
      <div class="create_acc">
      <?php
      echo "Not registered? <a href='registration_page.php'> Create an account </a>";
      ?>
      </div>
      

      <div class="inputfield">
      <input type="submit" name="back" value="Back" class="btn"><a href="index.php"></a>
       </div>

       <?php 
      

if(isset($_POST['login'])){
  $_SESSION['login']=$_POST['login'];
    
 
    $c_email = $_POST['c_email'];

    $c_pass=$_POST['c_pass'];
    
    $c_ip = getRealIpUser();

    $querycheck="select*from customers where c_email='$c_email'and c_pass='$c_pass'";

    $result = mysqli_query($db,$querycheck);

    $count = mysqli_num_rows($result);

    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($db,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);


    if($count== 0 || empty($c_email)){
      echo "Login Not Successful! <a href='registration_page.php'> Register </a>";

    }
    elseif($check_cart==0 ){
      $_SESSION['c_email']=$c_email;
      echo "Login Successful";
      echo "<script>window.open('index.php','_self')</script>";
    }
    elseif(!isset($_SESSION['sub_total'])){
      $_SESSION['c_email']=$c_email;
      echo "<script>window.open('index.php','_self')</script>";
    }
    else{  
    $_SESSION['c_email']=$c_email;
      echo "Login Successful";
      echo "<script>window.open('checkout.php','_self')</script>";

    }
    
  }
  if(isset($_POST['back'])){
    echo "<script>window.open('index.php','_self')</script>";

  }

?>
      </form>
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
