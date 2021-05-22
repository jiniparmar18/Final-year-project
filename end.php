<?php
session_start();
include("functions/function_prod.php")
?>
<html>
<head>
<title>Thankyou</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<style> 
body{
    background-color:#ffff;
    color:#4a4a4a;
    text-align:center;
    padding-top:200px;
    background: #f8f8f8;
}
h1{
    font-size:50px;
}
button{
    margin-top:50px;
    padding:10px;
    outline:none;
    border:none;
    background: #2fce98;
    cursor: pointer;

}
body a{
font-family: 'Roboto', sans-serif;
	font-size: 25px;
	font-weight: 400;
    color:#ffff;

    text-transform: uppercase;
    -webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
    text-decoration: none;
}
button:hover{
    background-color:#4a4a4a;
    
}
a:hover{
    color:#ffff;
    text-decoration: none;
}

</style>
</head>
<body>
<h1>THANKYOU FOR ORDERING!</h1>
<form method="post">
<button name="cont_shopping"><a>continue shoppping</a></button>
</form>
<?php
    $ip_add = getRealIpUser();
    if(isset($_POST['cont_shopping'])){
       
        $clear_product = "delete from cart where ip_add='$ip_add'";

        $run_clear_product = mysqli_query($db,$clear_product);
        
        if($run_clear_product ){
            
            echo "<script>window.open('index.php','_self')</script>";
            
        }
    }
        ?>
</body>
</html>