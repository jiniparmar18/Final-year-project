<?php
    $db= mysqli_connect("127.0.0.1:3307","root","","ecom_store");
    /// begin getRealIpUser functions ///

    function getRealIpUser(){
        
       
                
                // case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                // case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                // case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
                
                // default : return $_SERVER['REMOTE_ADDR'];
                return '1';
     
        
    }

    ///getRealIpUser function ends///
    /// begin add_cart functions ///
    
function add_cart(){
    
    global $db;
    if(isset($_POST['cart'])){
    
         if(isset($_GET['add_cart'])){

        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];

        $check_product = "select * from cart where ip_add='$ip_add' AND product_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('index.php?p_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (product_id,ip_add,qty) values ('$p_id','$ip_add','1')";
            
            $run_query = mysqli_query($db,$query);

             //echo "<script>window.history.back();</script>";
             echo "<script>window.open('index.php?p_id=$p_id','_self')</script>";
            //  echo "<script>window.close()</script>";
             
            
        }
        
    }
}
    if(isset($_GET['more'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['more'];

        if(isset($_GET['prod_qty'])){
           
        $product_qty= $_GET['prod_qty'];
        
        }
        
        $update_product = "update cart set qty='$product_qty' where product_id=$p_id";
        
        $run_updateprod = mysqli_query($db,$update_product);

        echo "<script>window.open('cart.php','_self')</script>";
    }
    if(isset($_GET['less'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['less'];

        if(isset($_GET['prod_qty'])){
           
        $product_qty= $_GET['prod_qty'];
        if($product_qty<=0){
            $delete_product="Delete from cart where product_id=$p_id";
            $run_deleteprod = mysqli_query($db,$delete_product);

        }
        
        }
        
        $update_product = "update cart set qty='$product_qty' where product_id=$p_id";
        
        $run_updateprod = mysqli_query($db,$update_product);

        echo "<script>window.open('cart.php','_self')</script>";

    }
    
    
}
function add_cart1(){
    
    global $db;
    if(isset($_POST['cart'])){
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];

  
        $check_product = "select * from cart where ip_add='$ip_add' AND product_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('category.php?p_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (product_id,ip_add,qty) values ('$p_id','$ip_add','1')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('category.php?p_id=$p_id','_self')</script>";
            
        }
        
    }
}
    if(isset($_GET['more'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['more'];

        if(isset($_GET['prod_qty'])){
           
        $product_qty= $_GET['prod_qty'];
        
        
        }
        
        $update_product = "update cart set qty='$product_qty' where product_id=$p_id";
        
        $run_updateprod = mysqli_query($db,$update_product);

        echo "<script>window.open('cart.php','_self')</script>";
    }
    if(isset($_GET['less'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['less'];

        if(isset($_GET['prod_qty'])){

        $product_qty= $_GET['prod_qty'];

        if($product_qty<=0){
            $delete_product="Delete from cart where product_id=$p_id";
            $run_deleteprod = mysqli_query($db,$delete_product);

        }
        
        }
        
        $update_product = "update cart set qty='$product_qty' where product_id=$p_id";
        
        $run_updateprod = mysqli_query($db,$update_product);

        echo "<script>window.open('cart.php','_self')</script>";


    }
    }
    

function add_cart2(){
    
    global $db;
    
    if(isset($_POST['cart'])){

    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $check_product = "select * from cart where ip_add='$ip_add' AND product_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('mencategory.php?p_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (product_id,ip_add,qty) values ('$p_id','$ip_add','1')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('mencategory.php?p_id=$p_id','_self')</script>";
            
        }
        
    }
}
    if(isset($_GET['more'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['more'];

        if(isset($_GET['prod_qty'])){
           
        $product_qty= $_GET['prod_qty'];
        
        }
        
        $update_product = "update cart set qty='$product_qty' where product_id=$p_id";
        
        $run_updateprod = mysqli_query($db,$update_product);

        echo "<script>window.open('cart.php','_self')</script>";
    }
    if(isset($_GET['less'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['less'];

        if(isset($_GET['prod_qty'])){

        $product_qty= $_GET['prod_qty'];
        if($product_qty<=0){
            $delete_product="Delete from cart where product_id=$p_id";
            $run_deleteprod = mysqli_query($db,$delete_product);

        }
        
        }
        
        $update_product = "update cart set qty='$product_qty' where product_id=$p_id";
        
        $run_updateprod = mysqli_query($db,$update_product);

        echo "<script>window.open('cart.php','_self')</script>";


    }


}


/// finish add_cart functions ///

/// begin wishlist functions ///

function wishlist(){
    
    global $db;
    if(isset($_POST['wish'])){
       
    
    if(isset($_GET['add_wish'])){

        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_wish'];

  
        $check_product = "select * from wishlist where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            
            echo "<script>window.open('index.php?p_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into wishlist (p_id,ip_add) values ('$p_id','$ip_add')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('index.php?p_id=$p_id','_self')</script>";
            
        }
        
    }
}
}

function wishlist1(){
    
    global $db;
    if(isset($_POST['wish'])){
       
    
    if(isset($_GET['add_wish'])){

        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_wish'];

  
        $check_product = "select * from wishlist where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            
            echo "<script>window.open('index.php?p_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into wishlist (p_id,ip_add) values ('$p_id','$ip_add')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('category.php?p_id=$p_id','_self')</script>";
            
        }
        
    }
}
}

function wishlist2(){
    
    global $db;
    if(isset($_POST['wish'])){
       
    
    if(isset($_GET['add_wish'])){

        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_wish'];

  
        $check_product = "select * from wishlist where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            
            echo "<script>window.open('mencategory.php?p_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into wishlist (p_id,ip_add) values ('$p_id','$ip_add')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('index.php?p_id=$p_id','_self')</script>";
            
        }
        
    }
}
}
/// finish wishlist functions ///
function items(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "select * from cart where ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
} 
function wish_items(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "select * from wishlist where ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
} 

function add(){
    global $db;

if(isset($_GET['add_cart'])){

    $ip_add = getRealIpUser();
    
    $p_id = $_GET['add_cart'];

    $check_product = "select * from cart where ip_add='$ip_add' AND product_id='$p_id'";
    
    $run_check = mysqli_query($db,$check_product);
    
    if(mysqli_num_rows($run_check)>0){
        
        echo "<script>alert('This product has already added in cart')</script>";

        echo "<script>window.open('cart.php?product_id=$p_id','_self')</script>";
        
    }else{
        
        $query = "insert into cart (product_id,ip_add,qty) values ('$p_id','$ip_add','1')";
        
        $run_query = mysqli_query($db,$query);

         //echo "<script>window.history.back();</script>";
        
         echo "<script>window.open('cart.php?p_id=$p_id','_self')</script>";
        
    }
    
}
}

    function get_prod1(){
        global $db;
        $get_products = "select * from products order by 1 DESC LIMIT 0,21";
    
        $run_products = mysqli_query($db,$get_products);
    
        while($row_products=mysqli_fetch_array($run_products)){
        
            $pro_id = $row_products['p_id'];
        
            $pro_name = $row_products['p_name'];
        
            $pro_price = $row_products['p_price'];
        
            $pro_img = $row_products['p_img'];
            
            $pro_cat = $row_products['p_cat'];

            wishlist();
            add_cart();
             echo "
             <div class='col-xl-4 col-md-6'>
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
                             <form action='index.php?add_wish=$pro_id' method='post'><button class='add-btn' name='wish'><div><div>WISHLIST</div></div></button></form>
                             </div>
                         
                             <div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>
                             <form action='index.php?add_cart=$pro_id' method='post'><button class='add-btn' name='cart'><div><div>ADD TO CART</div></div></button> </form>
                             </div>
                         </div>
                     </div>
                   
                 </div>
             </div>
         </div>
        
        
        ";
        
    }
    
}  
 
function getProdCats(){
    
    global $db;
    
    $get_cats = "select * from product_categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['p_cat_id'];
        
        $cat_name = $row_cats['p_cat_name'];
        
        echo "
        
            <li>
            
                <a href='category.php?cat=$cat_name'> $cat_name </a>
            
            </li>
        
        ";
        
    }
    
}
/// begin getCats functions ///

function getCats1(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_name = $row_cats['cat_name'];
        
        echo "
        
            <li>
            
                <a href='category.php?cat=$cat_name'> $cat_name </a>
            
            </li>
        
        ";
        
    }
    echo"
    <li>
            
                <a href='category.php'> All </a>
            
            </li>

    ";
    
}
    
/// finish getCats functions ///
function getCats2(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_name = $row_cats['cat_name'];
        
        echo "
        
            <li>
            
                <a href='mencategory.php?cat=$cat_name'> $cat_name </a>
            
            </li>

        
        ";
        
    }
    echo"
    <li>
            
                <a href='mencategory.php'> All </a>
            
            </li>

    ";
    
}
    
/// finish getCats functions ///

function search(){
    global $db;
    if(isset($_POST['submit'])){

	$str=mysqli_real_escape_string($db,$_POST['str']);
	$sql="select* from products where p_name like '%$str%'";
	
	$res=mysqli_query($db,$sql);
	if(mysqli_num_rows($res)>0){
		while($row_products=mysqli_fetch_assoc($res)){
			$pro_id = $row_products['p_id'];

            $pro_cat = $row_products['p_cat'];
        
            $pro_name = $row_products['p_name'];

            $pro_price = $row_products['p_price'];

            $pro_img = $row_products['p_img'];

            wishlist();

            add_cart();
            
            echo "<div class='col-xl-4 col-md-6'>
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
                        <form target='_blank' action='index.php?add_wish=$pro_id' method='post'><button class='add-btn' name='wish'><div><div>WISHLIST</div></div></button></form>
                        </div>
                    
                        <div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>
                        <form target='_blank' action='index.php?add_cart=$pro_id' method='post'><button class='add-btn' name='cart'><div><div>ADD TO CART</div></div></button> </form>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
       
       
       ";
		}
	}else{
		echo "No data found";
	}
}
}


   
?>