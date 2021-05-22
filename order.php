<?php 

session_start();
include("includes/db.php");
include("functions/function_prod.php");

?>
<?php 
if(!isset($_SESSION['done'])){
  echo "<script>alert('Please Enter Billing Details')</script>";
  echo "<script>window.open('checkout.php','_self')</script>";
}

elseif(isset($_GET['c_id'])){
    
    $customer_id = $_GET['c_id'];
    $status = $_POST['payment_radio'];
    $_SESSION['payment_mode'] = $status;
    
			if($status=="Cash on Delivery"){
                
                
                
                $email = $_SESSION['c_email'];
                $total_amount = $_SESSION['total'];
                $payment_mode = $_SESSION['payment_mode'];  
                $order_id = mt_rand();
                $payment_id = mt_rand();

                $succquery = "INSERT INTO customer_order (order_id,payment_id,payment_mode,status,email,total_amount) VALUES ('$order_id', '$payment_id',' $payment_mode','success','$email','$total_amount')";
                $run_succquery = mysqli_query($db,$succquery);
       
    
        
        // $delete_cart = "delete from cart where ip_add='$ip_add'";
        
        // $run_delete = mysqli_query($db,$delete_cart);
        
        
        echo "<script>alert('Your orders has been submitted, Thanks')</script>";

        echo "<script>window.open('end.php','_self')</script>";
        
    }
    



	
      if($status=="PayOnline"){
                 echo "<script>window.open('razorpay_api/pay.php','_self')</script>";
            }

		// }
    }
    



?>