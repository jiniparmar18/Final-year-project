<?php

    function skin_type()
    {  if(isset($_POST['next'])){ 
        echo"        <script defer>
        function myFunction() {
        var x = document.getElementById('form_div');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
        }
        </script>";
        
        $check = $_POST['check1'];
        if($check=='Acne'){
     
        echo"
        <form action='recommendation.php' class='skin_form' method='POST'>
					<fieldset class='field'>
							<legend>HOW OFTEN DOES YOUR ACNE APPEAR?</legend>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-options' required='required' value='once-a-month'> About once a month
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-options'required='required' value='once-in-three-months'> About once in three months 
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-options'required='required' value='always-present'> My acne is always present
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-options'required='required' value='Breakout'> Breakout due to certain products
								</label>
							</div></br>
						</fieldset>
						<fieldset class='field'>
							<legend>HOW MANY RED PIMPLES YOU HAVE ON YOUR FACE?</legend>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-num' required='required' value='0-2'> 0-2
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-num' required='required' value='3-5'> 3-5
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-num' required='required' value='5+'> More than 5
								</label>
							</div></br>
							
						</fieldset>
						
                        <fieldset class='field'>
							<legend>HOW MANY ACNE SCARS DO YOU HAVE ON YOUR FACE?</legend>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-scars'required='required' value='0-2' > 0-2
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-scars'required='required' value='3-5'> 3-5
								</label>
							</div></br>
							<div class='btn-group btn-group-toggle' >
								<label class='btn_primary'>
									<input type='radio' name='acne-scars'required='required' value='5+'> More then 5
								</label>
							</div></br>
						</fieldset>
                        
                        <fieldset class='field'>
                            <legend>DESCRIBE THE FINE LINES AROUND YOUR EYES AND FOREHEAD</legend>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='finelines-options'required='required' value='no'> No fine lines
                                </label>
                            </div></br>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='finelines-options'required='required' value='few'> Few and visible
                                </label>
                            </div></br>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='finelines-options'required='required' value='deep'> Deep and prominent
                                </label>
                            </div></br>
                        </fieldset>
            
                        <fieldset class='field'>
                            <legend>HOW OFTEN DO YOU APPY SUNSCREEN?</legend>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='sunscreen'required='required' value='everyday'> Everyday
                                </label>
                            </div></br>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='sunscreen'required='required' value='not-everyday'> Not everyday
                                </label>
                            </div></br>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='sunscreen'required='required' value='never'> Rarely or never
                                </label>
                            </div></br>
                        </fieldset>
                       
                        <fieldset class='field'>
                            <legend>DO YOU HAVE ENLARGED PORES?</legend>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='pores'required='required' value='normal'> Generally normal sized pores
                                </label>
                            </div></br>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='pores'required='required' value='few'> Few enlarged pores
                                </label>
                            </div></br>
                            <div class='btn-group btn-group-toggle' >
                                <label class='btn_primary'>
                                    <input type='radio' name='pores'required='required' value='many'> Many enlarged pores
                                </label>
                            </div></br>
                        </fieldset>
            
                        <fieldset class='field'>
                        <legend>DOES YOUR SKIN REACT ON APLLICATION OF SKIN CARE PRODUCTS?</legend>
                        <div class='btn-group btn-group-toggle' >
                            <label class='btn_primary'>
                                <input type='radio' name='react'required='required' value='No'> Rarely or never
                            </label>
                        </div></br>
                        <div class='btn-group btn-group-toggle' >
                            <label class='btn_primary'>
                                <input type='radio' name='react'required='required' value='yes'> Daily or often
                            </label>
                        </div></br>
                        </fieldset>
                       
						<div class='text_center'>
                            <button type='submit' name='done1' class='btn_next'>DONE</button>
                        </div>
					</form>";
    }

            if($check=='issues'){
        echo"
        <form action='recommendation.php' class='skin_form' method='POST'>
                <fieldset class='field'>
                <legend>DO YOU HAVE ANY DARK SPOTS ON YOUR FACE?</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='blemish-options'required='required' value='no-dark-spots'> No dark spots
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='blemish-options'required='required' value='>10'> Less than 10 spots 
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='blemish-options'required='required' value='10+'> More than spots
                    </label>
                </div></br>
            </fieldset>

            <fieldset class='field'>
                <legend>DO YOU HAVE ANY DARK PATCHES ON YOUR FACE?</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='patches'required='required' value='No-dark-patches'> No dark patches
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='patches'required='required' value='lightbrown-patches'> Yes, light brown patches
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='patches'required='required' value='darkbrown-patches'> Yes, dark brown patches
                    </label>
                </div></br>
            </fieldset>
           
            <fieldset class='field'>
                <legend>DESCRIBE THE FINE LINES AROUND YOUR EYES AND FOREHEAD</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='finelines-options'required='required' value='no'> No fine lines
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='finelines-options'required='required' value='few'> Few and visible
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='finelines-options'required='required' value='deep'> Deep and prominent
                    </label>
                </div></br>
            </fieldset>

            
            <fieldset class='field'>
            <legend>ARE THERE ANY DRY AREA ON  YOUR FACE?</legend>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='dry'required='required' value='No'> No
                </label>
            </div></br>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='dry'required='required' value='yes'> Yes
                </label>
            </div></br>
            </fieldset>

            <fieldset class='field'>
            <legend>DOES YOUR SKIN REACT ON APLLICATION OF SKIN CARE PRODUCTS?</legend>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='react'required='required' value='No'> Rarely or never
                </label>
            </div></br>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='react'required='required' value='yes'> Daily or often
                </label>
            </div></br>
            </fieldset>
            
            <fieldset class='field'>
                <legend>How Does Your Skin Feels?</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='cheeks'required='required' value='oily'> Oily
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='cheeks'required='required' value='dry'> Dry
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='cheeks'required='required' value='normal'> Normal
                    </label>
                </div></br>
            </fieldset>
            
        </fieldset>
            <div class='text_center'>
                <button type='submit' name='done2' class='btn_next'>DONE</button>
            </div>

         </form>";

    }

        if($check=='noissues'){
        echo"
        <form action='recommendation.php' class='skin_form' method='POST'>
            <fieldset class='field'>
                <legend>DESCRIBE THE FINE LINES AROUND YOUR EYES AND FOREHEAD</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='finelines-options'required='required' value='no'> No fine lines
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='finelines-options'required='required' value='few'> Few and visible
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='finelines-options'required='required' value='deep'> Deep and prominent
                    </label>
                </div></br>
            </fieldset>

            <fieldset class='field'>
                <legend>HOW OFTEN DO YOU APPY SUNSCREEN?</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='sunscreen'required='required' value='everyday'> Everyday
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='sunscreen'required='required' value='not-everyday'> Not everyday
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='sunscreen'required='required' value='never'> Rarely or never
                    </label>
                </div></br>
            </fieldset>
            <fieldset class='field'>
            <legend>ARE THERE ANY DRY AREA ON  YOUR FACE?</legend>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='dry'required='required' value='No'> No
                </label>
            </div></br>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='dry'required='required' value='yes'> Yes
                </label>
            </div></br>
            </fieldset>

            <fieldset class='field'>
                <legend>DO YOU HAVE ENLARGED PORES?</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='pores'required='required' value='normal'> Generally normal sized pores
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='pores'required='required' value='few'> Few enlarged pores
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='pores'required='required' value='many'> Many enlarged pores
                    </label>
                </div></br>
            </fieldset>

            <fieldset class='field'>
            <legend>DOES YOUR SKIN REACT ON APLLICATION OF SKIN CARE PRODUCTS?</legend>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='react'required='required' value='No'> Rarely or never
                </label>
            </div></br>
            <div class='btn-group btn-group-toggle' >
                <label class='btn_primary'>
                    <input type='radio' name='react'required='required' value='yes'> Daily or often
                </label>
            </div></br>
            </fieldset>
            <fieldset class='field'>
                <legend>THE SKIN ON THE FOREHEAD AND NOSE BRIDGE FEELS</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='forehead'required='required' value='oily'> Oily
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='forehead'required='required' value='dry'> Dry
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='forehead'required='required' value='normal'> Normal
                    </label>
                </div></br>
            </fieldset>
            <fieldset class='field'>
                <legend>THE SKIN ON YOUR CHEEKS FEELS</legend>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='cheeks'required='required' value='oily'> Oily
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='cheeks'required='required' value='dry'> Dry
                    </label>
                </div></br>
                <div class='btn-group btn-group-toggle' >
                    <label class='btn_primary'>
                        <input type='radio' name='cheeks'required='required' value='normal'> Normal
                    </label>
                </div></br>
            </fieldset>
            
        </fieldset>
            <div class='text_center'>
                <button type='submit' name='done3' class='btn_next'>DONE</button>
            </div>

         </form>";
     }
    }
}
function get_prod_by_type(){
    global $db;
    
    if(isset($_POST['done3'])){
        if($_POST['finelines-options']=="no"&& $_POST['sunscreen']=="everyday" && $_POST['dry']=="No" && $_POST['react']=="No" && $_POST['forehead']=="normal" && $_POST['cheeks']=="normal"){

     
    $get_products = "select * from products where skin_type= 'normal'";

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

}
elseif($_POST['finelines-options']=="few"&& $_POST['sunscreen']=="not-everyday" && $_POST['dry']=="yes" && $_POST['react']=="yes" && $_POST['forehead']=="dry" && $_POST['cheeks']=="dry"){

    $get_products = "select * from products where skin_type= 'normal' or p_name like '%sunscreen%' or p_name like '%sensitive%'";

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
}

    elseif($_POST['finelines-options']=="no" && ($_POST['sunscreen']=="not-everyday"||$_POST['sunscreen']=="never") && $_POST['dry']=="No" && ($_POST['react']=="No") && $_POST['forehead']=="oily" && $_POST['cheeks']=="oily"){

     
    $get_products = "select * from products where skin_type= 'oily' or p_name like '%sunscreen%'";

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

}

elseif(($_POST['finelines-options']=="deep"||$_POST['finelines-options']=="few") && $_POST['react']=="yes" && ($_POST['pores']=="many"||$_POST['pores']=="few") && $_POST['forehead']=="oily" && $_POST['cheeks']=="oily"){

     
    $get_products = "select * from products where skin_type= 'sensitive'";

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

}
else{
    $get_products = "select * from products where skin_type= 'combination' or skin_type= 'normal'";

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
}

}
    

if(isset($_POST['done1'])){
    if(($_POST['acne-options']=="once-a-month"||$_POST['acne-options']=="once-in-three-months") && $_POST['acne-num']=="0-2" && $_POST['acne-scars']=="0-2" && $_POST['finelines-options']=="no" && $_POST['sunscreen']=="everyday" && $_POST['pores']=="normal" && $_POST['react']=="No"){

 
$get_products = "select * from products where p_name like '%fresh%' or p_name like '%neem%'";

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

}
elseif($_POST['acne-options']="always-present" && ($_POST['acne-num']=="3-5"||$_POST['acne-num']=="5+") && ($_POST['acne-scars']=="3-5"||$_POST['acne-scars']=="5+")&& $_POST['sunscreen']=="not-everyday"&& ($_POST['finelines-options']=="few"||$_POST['finelines-options']=="deep")){

    $get_products = "select * from products where skin_type= 'sensitive' or p_name like '%Acne%'or p_name like '%Oil%' or p_name like '%sunscreen%'or p_name like '%age%'or p_name like '%olay%'";

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

    }
    elseif($_POST['acne-options']="always-present" && ($_POST['acne-num']=="3-5"||$_POST['acne-num']=="5+") && ($_POST['acne-scars']=="3-5"||$_POST['acne-scars']=="5+")){

        $get_products = "select * from products where  p_name like '%Acne%'or p_name like '%Oil%' ";
    
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
    
        }
        elseif($_POST['acne-options']="always-present" && ($_POST['acne-num']=="3-5"||$_POST['acne-num']=="5+") && ($_POST['acne-scars']=="3-5"||$_POST['acne-scars']=="5+")){
            $get_products = "select * from products where skin_type= 'sensitive' p_name like '%Acne%'or p_name like '%Oil%'or p_name like '%sunscreen%' ";
    
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
    
        
        }
        else{
        $get_products = "select * from products where  p_name like '%Acne%'or p_name like '%Oil%'or p_name like '%sunscreen%'or p_name like '%neem%'or p_name like '%cleanser%' ";
    
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
    
        
        }
    }
        
        if(isset($_POST['done2'])){

        if($_POST['blemish-options']=="no-dark-spots" && $_POST['patches']=="No-dark-patches" && $_POST['dry']=="No" && $_POST['react']=="No" && $_POST['cheeks']=="Oily"){
        
         
        $get_products = "select * from products where p_name like '%fresh%' or p_name like '%neem%' or p_name like '%bright%'or p_name like '%clear%'";
        
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
        
        }
        elseif(($_POST['blemish-options']="10+"||$_POST['blemish-options']=">10") && ($_POST['patches']=="lightbrown-patches"||$_POST['patches']=="darkbrown-patches")&& $_POST['dry']=="yes" && $_POST['react']=="yes"&& $_POST['cheeks']=="dry"){
        
            $get_products = "select * from products where skin_type= 'sensitive' or p_name like '%bright%'or p_name like '%white%' or p_name like '%light%'or p_name like '%glow%'";
        
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
        
            }
        
            else{
                $get_products = "select * from products where  p_name like '%Acne%'or p_name like '%ubtan%' or p_name like '%coco%'or p_name like '%green%' or p_name like '%cleanser%' or p_name like '%lotion%' ";
            
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
                
                }
}
}




?>