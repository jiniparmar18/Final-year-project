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
  <title>Registration Form</title>
  <link rel="stylesheet" href="styles/regi.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
    <form class="registration" method="post">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="c_fname"  pattern="^[a-zA-Z]+$" title="Invalid first name"  required="required">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="c_lname" pattern="^[a-zA-Z]+$" title="Invalid last name" required="required">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="c_pass" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$"
           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required="required">
       </div>  
      
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="c_gender" required="required">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="c_email"  pattern="^[a-z.]+[0-9]*@(.+)$" title="Invalid email address"  required="required">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="c_contact"  pattern="^[0-9]{10}$" title="Invalid phone number" required="required">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="c_address" required="required" ></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="c_code" pattern="^[0-9]{5,6}$" title="Invalid zip code" required="required">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name=""  required="required">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" name="register" value="Register" class="btn">
      </div>
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
<?php 

if(isset($_POST['register'])){
    
    $c_fname = $_POST['c_fname'];

    $c_lname = $_POST['c_lname'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_postalcode = $_POST['c_code'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_gender = $_POST['c_gender'];
    
    $c_ip = getRealIpUser();

 

    $query_email= "select * from customers where c_email='$c_email'";

    $run_query_email=mysqli_query($db,$query_email);
    
    $check_email = mysqli_num_rows($run_query_email);

    if($check_email=="1"){
      echo"This email address has already been used";
      echo "<script>window.open('registration.php','_self')</script>";
    }
    else{
    $insert_customer = "insert into customers (c_firstname,c_lastname,c_email,c_pass,c_gender,c_address,c_phone,c_postalcode,c_ip) values ('$c_fname','$c_lname','$c_email','$c_pass',' $c_gender','$c_address','$c_contact','$c_postalcode','$c_ip')";
    
    $run_customer = mysqli_query($db,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($db,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['c_email']=$c_email;
        
        //echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['c_email']=$c_email;
        
        //echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}
}

?>