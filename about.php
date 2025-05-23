<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=deviceswidth, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>GFC - About</title>
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
    <!-- about section start -->
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="about_text_2"><strong>ABOUT US</strong></h1>
        </div>
    </div>
    <div class="about_section about_main">
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
                <div class="about_img"><img src="images/pound2.jpg"></div>
            </div>
        </div>
    </div>
    <!-- about section end -->
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