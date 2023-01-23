<?php

session_start();
require_once "DBConn.php";
if (isset($_POST['LogOut']))
{
 $_SESSION['admin'] = false;
}
$mess = "SELECT * FROM tblmessage";
		$mResult = $conn->query($mess);

		if ($mResult->num_rows > 0) { 
		
			$_SESSION['message'] = true;
		}
		else{
			$_SESSION['message'] = false;
		}

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> APPLICATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div>
    	<div class="container">
			<section style="background-image: url('images/head.png');">
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html" style="color:#7E0272";> <img src="images/EmmanuelHead.png" alt="logo" width="50" height="50"> EMMANUEL DAYCARE CENTRE</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link " >Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="routine.php" class="nav-link">Routine</a></li>
	        	<li class="nav-item "><a href="teacher.php" class="nav-link" >Teachers</a></li>
	        	<li class="nav-item"><a href="application.php" class="nav-link"  style="color:#FF7017;">Application</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php 	if($_SESSION['admin'] == true){?>
              <li class="nav-item"><a href="AppList.php" class="nav-link"  >View App</a></li>

              <?php 	if($_SESSION['message'] == true){?>
                <li class="nav-item"><a href="Inbox.php" class="nav-link" style="color:#FF0000">Inbox</a></li>
                <?php }   else{ ?>
                <li class="nav-item"><a href="Inbox.php" class="nav-link" >Inbox</a></li>
                <?php }    ?>

                <li class="nav-item"><a href="LogOut.php" class="nav-link">Logout</a> </li>
              <?php     ?>
        
            <?php }  ?>
	        
			</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/head_strip.png');">
     
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="text-align:center;">Application</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Application <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

     <section class="ftco-section" style="padding:0px;">

    		<div class="row">
        	<div class="col-md-6 ftco-animate">
        		<div class="pricing-entry  pb-4 text-center"style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;margin-left:150px;margin-right:50px;margin-top:50px">
            <div style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;">
        <legend style="background-color:#7E0272; text-align: center;"> <b>CHILD APPLICATION</b></legend>
        </div> 
        
	        		<div><img src="images/child_apps.png" alt="app" width="380" height="220" style="border-radius: 5px;"></div>
<p style="text-align:justify; padding:20px">Children develop a solid foundation in pre-school, social, and general life skills at daycare that will help them succeed in school and beyond. Emmanuel daycare where love makes a difference.</p>
        			<p class="button text-center"><a href="child_application.php" class="btn px-4 py-3" style="background-color:#FF7017; color:#ffff">Apply Now</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-6 ftco-animate">
        		<div class="pricing-entry  pb-4 text-center"style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;margin-right:150px;margin-left:50px;margin-top:50px">
            <div style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;">
        <legend style="background-color:#7E0272; text-align: center;"> <b>TRANSPORT APPLICATION</b></legend>
        </div> 
	        		<div><img src="images/trans.png" alt="transport" width="380" height="220"style="border-radius: 5px;"></div>
                    <p style="text-align:justify;padding:20px">Looking for safe & trustworthy transportation for your kids? Our driver has her PDP and your child's 
safety is our biggest concern therefore you can trust us. The Emmanuel bus can pick & drop of your kids.</p>
        			<p class="button text-center"><a href="transport_application.php" class="btn  px-4 py-3" style="background-color:#FF7017; color:#ffff" >Apply Now</a></p>
        		</div>
        	</div>
        </section>
		

    <footer class="ftco-footer ftco-section" height="100" style="background-color:#ffff">
      <div class="container">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0"  style="color:#7E0272;">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3" style="color:#97C71B;">
                <li class="ftco-animate"><a href="#"><span class="icon-phone-square" style="color:#97C71B;" height="50" width="50"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook-square" style="color:#97C71B;"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-envelope-square" style="color:#97C71B;"></span></a></li>
              </ul>
                </div>
        </div>
     
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>