<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="The E-commerce Delivery Solution">
        <meta name="keywords" content="e-commerce,Delivery,Express,Courier">
        <meta name="author" content="www.ishtiaqahsan.com">

        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

        <title>Paperfly</title>

        <!-- Site Specific CSS -->
        <link rel="icon" type="image/png" href="./img/PFfavicon32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="./img/PFfavicon16.png" sizes="16x16" />

        <?php
        require_once './css/css-crush/CssCrush.php';
        echo csscrush_tag('./css/PF.css');
        ?>

        <!-- Site Specific JavaScript -->
        <script src="./js/PF.js"></script>
        <!-- SmoothScroll JavaScript -->
        <script src="./js/smooth-scroll.polyfills.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="./js/jquery.simplyscroll.min.js"></script>
        <script type="text/javascript">
            (function($) {
                $(function() {
                    $("#scroller").simplyScroll({speed: 5});
                });
            })(jQuery);
        </script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


   <!--On scroll animation-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet'  href="css/onscrollanimation.css">


    </head>
    <body>

  
    
    <!--------------------------- Top Navigation Bar ---------------------->
 <!--    <nav class="topNavbar" role="navigation" id="topOfPage">
        <div class="topNavDiv">
            <ul class="navlist topNav" id="pfTopnav">
                <li><a class="navbar-brand" href="index.php"><img id="navLogo" src="./img/PFLogoFull.png" alt="Home"></a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="automation.php">Automation</a></li>
                <li><a href="coverage.php">Coverage</a></li>

                <li><a href="merchants.php">Merchant Registration</a></li>
                <li><a href="career.php">Career</a></li>
                <li class="dropDown"><a class="dropBtn" onclick="showWingsLogin()" style="color: #00AEEF !important;">Login</a></li>
                
                <li class="icon">
                    <a href="javascript:void(0);" onclick="mobMenu();">&#9776;</a>
                </li>
            </ul>
        </div>
    </nav>

   
    <div id="windgsModalBackdrop" onclick="dismissWingsModal()"></div>
    <div class="dropdownContainer" id="wingsDropdown">
        <div class="leftPanel">
            <img class="merchantFlashImg" src="./img/logoWings.png">
            <p>WINGs is the core digital delivery system of Paperfly.</p>
            Merchants use WINGs for:
            <ul><li>Order Entry</li>
                <li>Tracking Package</li>
                <li>Customer Feedback</li>
                <li>Invoice & Billing</li></ul>
        </div>
        <div class="rightPanel">
            <form action="http://paperflybd.com/userlogin" id="frmSignin" name="frmSignin" method="post">
                <input type="text" placeholder="Login ID" id="wingsID" name="username" required autofocus>
                <input type="password" placeholder="Password" id="wingsPass" name="password" required>
                <input type="submit" id="wingsLoginButton" name="submit" onclick="submitWingsLogin()" value="Lets Fly! &#x00bb;">
                <button type="button" id="wingsCancelButton" onclick="dismissWingsModal()">Cancel</button>
            </form>
        </div>
    </div> -->
    <!-------------------------------------- Floating Icon -->


    
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <a class="navbar-brand" href="index.php"><img id="navLogo" src="./img/PFLogoFull.png" alt="Home"></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="services.php">Services</a></li>
                <li><a href="automation.php">Automation</a></li>
                <li><a href="coverage.php">Coverage</a></li>
                <li><a href="#">Doorstep Automation</a></li>
                <li><a href="#">Management</a></li>
                <li><a href="merchants.php">Merchant Registration</a></li>
                <li><a href="career.php">Career</a></li>
             <!--    <li class="dropDown"><a class="dropBtn" onclick="showWingsLogin()" style="color: #00AEEF !important;">Login</a></li> -->
                <!-- 
                <li class="icon">
                    <a href="javascript:void(0);" onclick="mobMenu();">&#9776;</a>
                </li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



  
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
