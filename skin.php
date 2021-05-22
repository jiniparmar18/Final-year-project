<?php
	include("functions/function_skin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LittleCare</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel = "icon" href="images/logo_1.png" >
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="styles/skin.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>


<div class="super_container">


	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Little Care</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<p class="d-flex flex-row align-items-start justify-content-start text-center">
                        You Are Just One Step Away From Clear & Glowing Skin!</br>  
                        Tell Us About Your Skin Type And Skin Concerns And Lifestyle So That We Can Suggest The Skincare Products That Suits You Best.</br>
                        </p>   
					</div>
				</div>
			</div>
		</div>

		<!-- contact -->

		<div class="skintype_box">
			<div class="container">
				<div class="skintype_container" id="form_div">
                   
                    <form class="skin_form" method="POST">

						<fieldset class="field">
						<legend>SELECT YOUR CONCERNS</legend>
						<!-- <div class="btn-group btn-group-toggle" > -->
							<div class= "radio-group">
							<input type="radio" id="check1" name="check1" value="Acne"> Acne 
							<br> 
							<input type="radio" id="check1" name="check1" value="issues"> Issues With Blemishes
							<br>
							<input type="radio" id="check1" name="check1" value="noissues"> No Issues
							<br>
							</div>
							
						</fieldset>
                        
                        <div class="text_center">
                            <button type="submit" name="next" class="btn_next">NEXT</button>
                        </div>
                    </form>
					<script>
									$(document).ready(function(){
										var radios = document.getElementsByName("check1");
										var val = localStorage.getItem('check1');
										for(var i=0;i<radios.length;i++){
											if(radios[i].value == val){
											radios[i].checked = true;
											}
										}
										$('input[name="check1"]').on('change', function(){
											localStorage.setItem('check1', $(this).val());
										
										});

											

										});
									</script>
					<?php
					skin_type();
					?>
				
					
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>