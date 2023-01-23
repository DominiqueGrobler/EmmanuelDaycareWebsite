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
    <title> About Us </title>
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
  
  <style>
	NAV
	a {
  color: #7E0272;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #7E0272;
    text-decoration: underline; }
  </style>
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
	           <?php 	if($_SESSION['admin'] == true){?>
              <li class="nav-item"><a href="AppList.php" class="nav-link"  >View App</a></li>

				<?php 	if($_SESSION['message'] == true){?>
					<li class="nav-item"><a href="Inbox.php" class="nav-link" style="color:#FF0000">Inbox</a></li>
					<?php }   else{ ?>
					<li class="nav-item"><a href="Inbox.php" class="nav-link" >Inbox</a></li>
					<?php }    ?>

					<li class="nav-item"><a href="LogOut.php" class="nav-link">Logout</a> </li>
			
  
			  <?php }
			  else{?>
			  	<li class="nav-item "><a href="index.php" class="nav-link ">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link" style="color:#FF7017;">About</a></li>
	        	<li class="nav-item"><a href="routine.php" class="nav-link">Routine</a></li>
	        	<li class="nav-item "><a href="teacher.php" class="nav-link" >Teachers</a></li>
	        	<li class="nav-item"><a href="application.php" class="nav-link"  >Application</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link" ">Contact</a></li>
	          	<?php  }  ?>
	        
			</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/head_strip.png');">
     
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
			<br>
			<h2 class="mb-4" style="color:#7E0272"><b>WELCOME TO EMMANUEL DAYCARE</b></h2>
			<p style="text-align:justify">In 1995, Karin Grobler founded Emmanuel Daycare. She pursued a teaching degree and felt called to work with children. God gave the name "Emmanuel Daycare," 
				which means "God with us."  Karin and the daycare have been blessed by God throughout the years, abundantly. We can now, 27 years later, see all the seeds they sowed into the lives of the children. Because they base their lives on Jesus, children 
				who attended Emmanuel are now doctors, lawyers, managers, and the list goes on. We think of Emmanuel as a family tree since children who are now adults are sending their offspring. 
				We believe that you have to sow into every child's life and you will reap, that is why Emmanuel Daycare is so blessed. .</p>
		
          	<h2 class="mb-4" style="color: #FF7017;"><b>WHAT WE OFFER</b></h2>
						<p style="text-align:justify">Emmanuel Daycare's mission is to provide a safe, stimulating, caring environment for children. We want to promote a registered, high quality , 
							clean and affordable daycare. We focus on providing a educational experience , promoting social, emotional, physical and intellectual development 
							( in a fun way). We are committed to the families and we strive to give parents complete peace of mind while being at work. 
							We as teachers want to meet the needs of every child. We are a fun, loving group of teachers that want to make the school a second home to your child. 
							We want to fill their day with laughter, joy,
							love and fulfill their educational needs.</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style="background-color:#7E0272"><span class="flaticon-"><img src="images/house.png" alt="enviroment" width="40" height="40"></span></div>
									<div class="text">
										<h3 style="color:#7E0272">Loving Enviroment</h3>
										<p style="text-align:justify">Friendly, caring and helpful staff. It is a safe, fun, loving, christian enviroment at our daycare where every child counts.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"style="background-color:#7E0272"><span class="flaticon-jigsaw"></span></div>
									<div class="text">
										<h3 style="color:#7E0272">Educational & Creative Lessons</h3>
										<p style="text-align:justify">We are the building blocks in every child’s future. We make learning and creative fun & we prepare them for Grade R.
											</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"style="background-color:#97C71B"><span  class="flaticon-education"></span></div>
									<div class="text">
										<h3 style="color: #97C71B;">Sufficient Classrooms</h3>
										<p style="text-align:justify">Children are stimulated by colours & sound therefore our daycare classes are colourful & spacious. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"style="background-color:#97C71B"><span class="flaticon-kids"></span></div>
									<div class="text">
										<h3 style="color: #97C71B;">Extra mural activities</h3>
										<p style="text-align:justify">We offer extra-murals which include Mighty Kings Rugby, Monkeynastixs & Soccer Stars, they come at additional costs.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"style="background-color:#FF7017"><span class="flaticon-reading"></span></div>
									<div class="text">
										<h3 style="color: #FF7017;">Aftercare</h3>
										<p style="text-align:justify">We have special practitioners who just help the aftercare kids with homework. If your child is struggling we can help you.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"style="background-color:#FF7017"><span><img src="images/bus.png" alt="bus" width="40" height="40"></span></div>
									<div class="text">
										<h3 style="color: #FF7017;">Transport</h3>
										<p style="text-align:justify">We provide safe transport for pick-up & drop-off from 7:00 - 16:00 with in Bluewater Bay. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" height="200" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span style="color: #FF7017"> EMMANUEL DAYCARE SUCCESS</h2>
            <p style="color:#000000">Since the day we opened we have impacted many young minds and filled their hearts with love. We have gathered many special bonds and success stories. We are proud of each and every child that has been at Emmanuel Daycare.</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text" >
		                <strong class="number" style="color:#FF7017" data-number="27">0</strong>
		                <span style="color:#000000" >Years of Experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" style="color:#FF7017" data-number="564">0</strong>
		                <span style="color:#000000">Successful Kids</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" style="color:#FF7017" data-number="564">0</strong>
		                <span style="color:#000000">Happy Parents</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
	  <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate" style="background-color:#7E0272">
		<div class="media block-6 d-block text-center">
		  <div class="icon d-flex justify-content-center align-items-center"  style="background-color:#B654AD">
				<span class="flaticon"><img src="images/BABY.png" alt="enviroment" width="50" height="50"></span>
		  </div>
		  <div class="media-body p-2 mt-3"  style="background-color:#7E0272">
			<h3 class="heading"><b>BABY CLASS</b></h3>
			<p style="text-align:justify; color:white">If your child is between the age 4 months - 2 years old they will be in this class.</p>

		  </div>
		</div>      
	  </div>
	  <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate" style="background-color:#9F1212">
		<div class="media block-6 d-block text-center">
		  <div class="icon d-flex justify-content-center align-items-center" style="background-color:#FF3434">
				<span class="flaticon"><img src="images/RED.png" alt="enviroment" width="50" height="50"></span>
		  </div>
		  <div class="media-body p-2 mt-3">
			<h3 class="heading"><b>RED CLASS</b></h3>
			<p style="text-align:justify; color:white">If your child is between the age 2 - 3 years old they will be in this class.</p>

		  </div>
		</div>    
	  </div>
	  <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate " style="background-color:#FF7017">
		<div class="media block-6 d-block text-center">
		  <div class="icon d-flex justify-content-center align-items-center" style="background-color:#FF9756">
				<span class="flaticon"><img src="images/ORANGE.png" alt="enviroment" width="50" height="50"></span>
		  </div>
		  <div class="media-body p-2 mt-3" >
			<h3 class="heading"><b>ORANGE CLASS</b></h3>
			<p style="text-align:justify; color:white">If your child is between the age 3 - 4 years old they will be in this class.</p>

		  </div>
		</div>      
	  </div>
	  <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary"style="background-color:#97C71B">
		<div class="media block-6 d-block text-center">
		  <div class="icon d-flex justify-content-center align-items-center" style="background-color:#C9F160" >
				<span class="flaticon"><img src="images/GREEN.png" alt="enviroment" width="50" height="50"></span>
		  </div>
		  <div class="media-body p-2 mt-3">
			<h3 class="heading"><b>GREEN CLASS</b></h3>
			<p style="text-align:justify; color:white">If your child is between the age 4 - 5 years old they will be in this class.</p>

		  </div>
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