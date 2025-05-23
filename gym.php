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
<title>GFC - Class</title>
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
    <!-- our service section start -->
    <div class="our_section layout_padding">
      <div class="container">
        <h1 class="our_text"><strong>OUR CLASSES</strong></h1>
        <p class="client_long_text"></p>
        <div class="row padding_top_0">
          <div class="col-lg-4">
            <div class="image_7"><a href="#"><img src="images/img-1.png"></a></div>
            <h2 class="design_text">WEIGHTLIFTING</h2>
            <p class="fact_text">The goal of weightlifting, a strength training discipline, is to grow muscle and improve general strength by lifting large weights. Powerlifting, which comprises the squat, bench press, and deadlift, and Olympic lifting, which incorporates the snatch and clean and jerk, are its two primary forms. In addition to improving bone density, metabolism, and body composition, this type of exercise also promotes mental discipline.
            </p>
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
    <div class="project_section layout_padding about_main">
        <div class="container">
            <h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
            <p class="lorem_ipsum_text"></p>
            <div class="choice_main">
                <div class="choose_bt"><a href="#">CHOOSE YOUR TRAINER</a></div>
            </div>            
        </div>
    </div>
    <!-- project section end -->
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