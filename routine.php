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
    <title>Routine</title>
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
	        	<li class="nav-item"><a href="about.php" class="nav-link" >About</a></li>
	        	<li class="nav-item"><a href="routine.php" class="nav-link"style="color:#FF7017;">Routine</a></li>
	        	<li class="nav-item "><a href="teacher.php" class="nav-link" >Teachers</a></li>
	        	<li class="nav-item"><a href="application.php" class="nav-link"  >Application</a></li>
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
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/head_strip.png');">
    
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Routine</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> </p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 course d-lg-flex ftco-animate" >
						<div class="img" style="background-image: url(images/mielie.jpg);style="margin-right:10px""></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;"><b>Breakfast</b></h3>
							<p class="subheading"><span><b>Time:</b></span> 8:00am - 8:30am</p>
							<p style="text-align:justify">
                We believe in a healthy breakfast to fuel the kids for the day and that's why we serve mielie meal. Mielie meal is enriched with 
                beneficial micronutrients: 
                Iron, Vitamin A and Vitamin B.
              </p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/pray.jpeg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;"> <b>Morning Ring</b></h3>
							<p class="subheading"><span><b>Time:</b></span> 8:30am - 9:00am</p>
							<p style="text-align:justify">
                We have some fun to kick off the day. Children sing both enjoyable educational songs and songs of praise and worship. 
                We pray, read the Bible, and study Bible verses after they have some fun. Additionally, we practice counting, shapes, and colours.
              </p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/ini.jpeg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;"><b>Class</b></h3>
							<p class="subheading"><span><b>Time:</b></span> 9:00am - 9:30am</p>
							<p style="text-align:justify">We create a fun & creative environment where children can express themselves and learn them new skills.
								We focus on important fine motor skills, gross motor skills, cognitive skills, eye and hand cordination. This 
								will help them develop social and emotional skills for future learning.</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/snack.jpg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;"><b>Teatime</b></h3>
							<p class="subheading"><span><b>Time:</b></span> 9:30am - 10:00am</p>
							<p style="text-align:justify">
                Parents are requested to send Teatime every day. 
                Lunch box should include the following: Sandwich, Vienna, Cheese, Fruit, Cookie, Muffin, Chips, Sweets etc.
                Try and pack different things in during the week to make it interesting for            
                your child. The children enjoy opening their lunch boxes to see what’s for Teatime.

                </p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/play6.jpeg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;"><b>Playtime</b></h3>
							<p class="subheading"><span><b>Time:</b></span> 10:00am - 11:00am</p>
							<p style="text-align:justify">
							    Outdoor play is important for physical development. They can use their
imagination, have fun and enjoy free play. In this enviroment kids learn how to take turns and share.
							</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/unam.jpeg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;"><b>Lunch</b></h3>
							<p class="subheading"><span><b>Time:</b></span> 11:00am - 11:45am</p>
							<p style="text-align:justify">
							    Meat - Starch - Vegetables - Fruit
Think of school lunch as the fuel we make for the kids to keep them healthy & energetic. 
The kids sit down, pray and learn how to eat on their own.
							</p>
						</div>
					</div>
          <div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/sleep.jpg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;">Sleeping</a></h3>
							<p class="subheading"><span><b>Time:</b></span> 12:00pm - 14:00pm</p>
							<p style="text-align:justify">
                Afer the kids tummies are full they have a nap. We believe that napping allows children's bodies and minds 
                time to rest and recharge during those significant changes as they grow and develop.
              </p>
						</div>
					</div>
          <div class="col-md-6 course d-lg-flex ftco-animate" >
						<div class="img" style="background-image: url(images/yogi.jpeg);"></div>
						<div class="text bg-light p-4" >
							<h3 style="color: #97C71B;">Yogurt</a></h3>
							<p class="subheading"><span><b>Time:</b></span> 14:15pm - 14:30pm</p>
							<p style="text-align:justify">
                Parents can send a yogurt for their little one. The yogurts
                are marked clearly with your child’s name on it. Futhermore a snack will be provided by Emmanuel which includes cool drink and cookies.
              </p>
						</div>
					</div>
          <div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/play3.jpeg);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;">Playtime</a></h3>
							<p class="subheading"><span><b>Time:</b></span> 14:30pm - 16:00pm</p>
							<p style="text-align:justify">
							    
The kids play outside with their friends. They walk, run, climb, jump, catch, crawl, ride bikes & swing. 
Each day they working on they their physical development in a fun enviroment.
							</p>
						</div>
					</div>
          <div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/home.png);"></div>
						<div class="text bg-light p-4">
							<h3 style="color: #97C71B;">Home</a></h3>
							<p class="subheading"><span><b>Time:</b></span> 16:00pm - 17:30pm</p>
							<p style="text-align:justify"> 
                After a eventful day of learning & fun the kids come inside, start to wind down watch a movie and get cleaned up & ready for mommy and daddy to fetch them.
              </p>
						</div>
					</div>
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