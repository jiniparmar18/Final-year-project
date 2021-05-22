<?php 
session_start();
$db= mysqli_connect("127.0.0.1:3307","root","","ecom_store");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "icon" href="./../images/logo_1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="./../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="responsive_admin.css">

<style>
    .wrapper{
        max-width: 460px;
        width: 100%;
        height:100%;
        background: #fff;
        margin: 40px auto;
        box-shadow: 10px 20px 30px rgba(0,0,0,0.5);
        padding: 30px;
        margin-top: 100px;
        background-color:#d5dbd9;
      
    }.title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #4a4a4a;
        text-transform: uppercase;
        text-align: center;
    }
    .inputfield{
        font-size: 20px;
        font-weight: 600;
        color: #4a4a4a;
        margin-bottom: 20px;

    }
    .input{
        width: 360px;
        outline: none;
        border: 1px solid #d5dbd9;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.3s ease;
    }
    .btn{
        width:100px;
        height:35px;
        background-color:#4a4a4a;
        color:#ffff;
        font-size:16px;
        outline:none;
    }
    .btn:hover{
        background-color:#2fce98; 
        
    }
    body{
        background:	#606060;
    }
    @media (max-width:420px) {
    .wrapper{
        width: 90%;
    }
    .input{
        width:240px;
    }
    .wrapper .form .inputfield{
        flex-direction: column;
        align-items: flex-start;
    }
    .wrapper .form .inputfield label{
        margin-bottom: 5px;
    }
    .wrapper .form .inputfield.terms{
        flex-direction: row;
    }

    }
</style>
</head>
<body>
    
<div class="wrapper">
<div class="title">
      Login 
    </div>
    <div class="form">
    <form class="login" method="post">
        <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input" pattern="^[a-z.]+[0-9]*@(.+).[a-z.]+$" title="Invalid email address"  name="a_email">
        </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$"
           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="a_pass">
       </div>  
 
      <div class="inputfield">
      <input type="submit" name="adminlogin" value="Login" class="btn">  
      </div>

</form>
</div>
</div>
</body>
<html> 
<?php
if(isset($_POST['adminlogin'])){
    $_SESSION['adminlogin']= $_POST['adminlogin'];
    
    $a_email = $_POST['a_email'];

    $a_pass=$_POST['a_pass'];
    
    // $c_ip = getRealIpUser();

    $querycheck="select*from admin where a_email='$a_email'and a_pass='$a_pass'";

    $result = mysqli_query($db,$querycheck);

    $count = mysqli_num_rows($result);

    // $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    // $run_cart = mysqli_query($db,$sel_cart);
    
    // $check_cart = mysqli_num_rows($run_cart);


    if($count== 0 || empty($a_email)){
      echo "<script>alert('Login Not Successful!')</script>";

    }
    // elseif($check_cart==0 ){
    //   // $_SESSION['a_email']=$a_email;
    //   echo "Login Successful";
    //   echo "<script>window.open('insert.php','_self')</script>";
    // }
    else{
      
    $_SESSION['a_email']=$a_email;
      echo "<script>alert('Login Successful!')</script>";
      echo "<script>window.open('insert.php','_self')</script>";

    }
    
  }
  // if(isset($_POST['back'])){
  //   echo "<script>window.open('index.php','_self')</script>";

  // }

?>