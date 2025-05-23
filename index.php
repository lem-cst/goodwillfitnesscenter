<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Goodwill Fitness Center</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="index.php"><img src="images\logo2.png"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.php">HOME</a></li>                                                    
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="price.php">PACKAGE</a></li>
                            <li><a href="gym.php">TRAINING</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                             <?php if(isset($_SESSION['user'])): ?>
                            <li><a href="logout.php">LOGOUT</a></li>
                        <?php else: ?>
                            <li><a href="login.php">LOGIN</a></li>
                        <?php endif; ?>
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" title="Close">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">HOME</a>
                  <a href="about.php">ABOUT</a>
                  <a href="price.php">PRICE</a>
                  <a href="gym.php">TRAINING</a>
                  <a href="contact.php">CONTACT US</a>
                  <?php if(isset($_SESSION['user'])):?>
                  <a href="logout.php">LOGOUT</a>
                  <?php else:?>
                  <a href="login.php">LOGIN</a>
                  <a href="register.php">REGISTER</a>
                <?php endif;?>
                <a href="admin_login.php">ADMIN</a>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                </div>  
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
    	<div id="my_Controls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
    		<div class="banner_taital">
    			<h1 class="find_text">FIND EVERYTHING YOU NEED</h1>
    			<h2 class="crush_text">TO CRUSH YOUR FITNESS GOALS</h2>
    			<p class="long_text">We offer free sessions w/ trainer & program of Circuit Training, Weights, Weight loss/gain, Toning, Boxing.</p>
    		</div>
    		<div class="contact">
    			<div class="contact_bt"><a href="contact.php">Contact Us</a></div>
    		</div>
    	</div>
    </div>
  </div>
  
</div>
    	
    </div>
    <!-- banner section end -->
    <!-- about section start -->
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="about_text_2"><strong>ABOUT US</strong></h1>
            <p class="client_long_text">
        </div>
    </div>
    <div class="about_section">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="about_taital">
    				<h1 class="about_text">ABOUT OUR GYM</h1>
    				<p class="long_text_2">Welcome to Goodwill Fitness Center, where fitness meets community! Established in 2015, we are dedicated to helping individuals of all fitness levels achieve their health and wellness goals in a motivating and supportive environment.
              At Goodwill Fitness Center, we believe that getting fit should be enjoyable and accessible to everyone. Our state-of-the-art facilities are equipped with the latest fitness technology, including a wide range of strength and cardio equipment, free weights, and spacious workout areas. Whether you’re a seasoned athlete or just starting your fitness journey, we have everything you need to succeed.</p>
    				<div class="about_bt"><a href="facilities.php">FACILITIES</a></div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="about_img"><img src="C:\xampp\htdocs\MEM\images\pound2.png"s></div>
    		</div>
    	</div>
    </div>
    <!-- about section end -->
    <!-- our service section start -->
    <div class="our_section layout_padding">
    	<div class="container">
    		<h1 class="our_text"><strong>OUR CLASSES</strong></h1>
      		<div class="row padding_top_0">
    			<div class="col-lg-4">
    				<div class="image_7"><a href="#"><img src="images/img-1.png"></a></div>
    				<h2 class="design_text">WEIGHTLIFTING</h2>
    				<p class="fact_text">The goal of weightlifting, a strength training discipline, is to grow muscle and improve general strength by lifting large weights. Powerlifting, which comprises the squat, bench press, and deadlift, and Olympic lifting, which incorporates the snatch and clean and jerk, are its two primary forms. In addition to improving bone density, metabolism, and body composition, this type of exercise also promotes mental discipline. </p>
    			</div>
    		    <div class="col-lg-4">
    		    	<div class="image_7"><a href="#"><img src="images/img-2.png"></a></div>
    				<h2 class="design_text">INDOOR CYCLING</h2>
    				<p class="fact_text">Riding stationary bikes in a group environment under the guidance of an instructor is known as indoor cycling, and it's a high-intensity training activity. This workout effectively challenges the cardiovascular system by simulating outside riding experiences via the use of music, rhythm, and different resistance levels. Classes are appropriate for people of all skill levels since they are made to increase endurance, burn calories, and improve general fitness.</p>
    		    </div>
    		    <div class="col-lg-4">
    		    	<div class="image_7"><a href="#"><img src="images/img-3.png"></a></div>
    				<h2 class="design_text">CORE POWER</h2>
    				<p class="fact_text">The objective of the exercise program Core Power is to develop the muscles in the core, which includes the back, pelvis, and abdomen. Dynamic training is crucial for everyday tasks and sports performance because it promotes stability, posture, and general body mobility. Core Power programs may be customized to match different fitness levels and frequently include a variety of exercises including planks, twists, and stability ball routines.</p>
    		    </div>
    		    <div class="bt_main">
    		    	<div class="seemore_bt"><a href="#">See More</a></div>
    		    </div>
    		</div>
    		
    	</div>
    </div>
    <!-- our service section end -->
    <!-- project section start -->
    <div class="project_section layout_padding">
    	<div class="container">
    		<h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
    		<p class="lorem_ipsum_text"></p>
            <div class="choice_main">
            	<div class="choose_bt"><a href="#">CHOOSE YOUR TRAINER</a></div>
            </div>            
    	</div>
    </div>
    <!-- project section end -->   
    <!-- our price section start -->   
    <div class="our_price_section layout_padding">
    	<div class="container">
    		<h1 class="our_price"><strong>OUR PRICE</strong></h1>
    		<p class="client_long_text"></p>
            <div class="price_section_2">
            	<div class="row">
            		<div class="col-sm-12 col-lg-4">
            			<div class="beginner">
            				<h2 class="beginner_text">MEMBERSHIPS</h2>
            				<h1 class="plan_text">₱500</h1>
            				<P class="access_text">20% Discount for student and senior citizens</P>
            				<P class="access_text">One Year memberships</P>
            				<P class="access_text">1 FREE Session</P>
            				<P class="free_text">1 Free personal training</P>
            			</div>
            			<div class="select_boton">
            			    <div class="select_bt"><a href="payment2.php">SELECT PLAN</a></div>
            			</div>
            		</div>
            		<div class="col-sm-12 col-lg-4">
            			<div class="premium">
            				<h2 class="beginner_text">MONTHLY</h2>
            				<h1 class="plan_text">₱1000</h1>
            				<P class="access_text">Unlimited access to the gym for 1month</P>
            				<P class="access_text">For members only</P>
            				<P class="access_text"></P>
            				<P class="access_text"></P>
            				<P class="free_text"></P>
            			</div>
            			<div class="select_boton">
            			    <div class="premium_bt"><a href="payment2.php">SELECT PLAN</a></div>
            			</div>
            		</div>
            		<div class="col-sm-12 col-lg-4">
            			<div class="beginner">
            				<h2 class="beginner_text">ANNUAL</h2>
            				<h1 class="plan_text">₱9500</h1>
            				<P class="access_text">Unlimited access to the gym for 2years</P>
            				<P class="access_text">   </P>
            				<P class="access_text"> </P>
            				<P class="access_text"> </P>
            				<P class="free_text"> </P>
            			</div>
            			<div class="select_boton">
            			    <div class="select_bt"><a href="payment2.php">SELECT PLAN</a></div>
            			</div>
            		</div>
            	</div>
            </div>
    	</div>
    </div> 
    <!-- our price section end -->   

    <!-- contact section start -->
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="contact_text_2"><strong>CONTACT US</strong></h1>
        </div>
    </div>
    <div class="contact_section">
    	<div class="row">
    		<div class="col-md-6 background_bg">
    			<div class="contact_bg">
    				<div class="input_main">
                       <div class="container">
                       	<h2 class="request_text">REQUEST A CALL BACK</h2>
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone" name="Email">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                                </div>
                            </form>
                          </form>
                       </div> 
                    </div>
                    <div class="send_bt"><a href="#">SEND</a></div>
    			</div>
    		</div>
    		<div class="col-md-6">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.142988685932!2d121.01951267579068!3d14.704504674522978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1234af3dd97%3A0x1339a08b4b26eb7c!2sGoodwill%20Fitness%20Center!5e0!3m2!1sen!2sph!4v1747535163098!5m2!1sen!2sph" width="600" height="560" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
            </div>
    	    </div>
    	</div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="footer_section_2">
    	    <div class="container">
    		    <div class="row map_addres">
    		    	<div class="col-sm-12 col-lg-4">
    		    		<div class="map_text"><img src="images/map-icon.png"><span class="map_icon">39 Katipunan Ave, Quezon City, 1116 Metro Manila</span></div>
    		    	</div>
                    <div class="col-sm-12 col-lg-4">
                    	<div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">(+63 178815828)</span></div>
                    </div>
    		    	<div class="col-sm-12 col-lg-4">
    		    		<div class="map_text"><img src="images/email-icon.png"><span class="map_icon">Billie_Bie2003@yahoo.com</span></div>
    		    	</div>
    		    </div>
    		    <div class="social_icon">
    		    	<ul>
    		    		<li><a href="#"><img src="images/fb-icon.png"></a></li>
    		    		<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    		    		<li><a href="#"><img src="images/in-icon.png"></a></li>
    		    		<li><a href="#"><img src="images/instagram-icon.png"></a></li>
    		    	</ul>
    		    </div>
    	    </div>
        </div>
    </div>
    <!-- footer section end -->






    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>



     
</body>
</html>