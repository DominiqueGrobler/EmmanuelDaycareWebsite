<?php
    session_start();
	require_once "DBConn.php";


  if (isset($_POST['LogOut']))
  {
   $_SESSION['admin'] = false;
  }

  $mess = "SELECT * FROM tblmessage";
  $mResult = $conn->query($mess);
  $Error="";
  if ($mResult->num_rows > 0) { 
  
    $_SESSION['message'] = true;
  }
  else{
    $_SESSION['message'] = false;
  }

    $Error="";
    $sName = isset($_POST['sName'])?$_POST['sName']:'';
    $cNumber = isset($_POST['cNumber'])?$_POST['cNumber']:'';
    $senderEmail = isset($_POST['senderEmail'])?$_POST['senderEmail']:'';
    $message = isset($_POST['message'])?$_POST['message']:'';

    if(isset($_POST['mSend']))
    
    {	
      if($cNumber = 10)
      {
        if(preg_match('/^[0-9]+$/', $cNumber))
        {
          //Insert into table     
          $insert = "INSERT INTO tblmessage (sName, cNumber, senderEmail, message)
          VALUES ('$sName', '$cNumber','$senderEmail','$message')";

          if ($conn->query($insert) === TRUE) {
            $Error="New record created successfully";

          } else {
            $Error="Error: " . $insert . "<br>" . $conn->error. "<br>";
          }
          $conn->close();	
       }
       else 
			{
			$Error= "A phone number must be made from numbers[0-9]";
			}
      }
      else 
			{
			$Error= "Plese enter a valid phone number";
			}
        
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
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
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="routine.php" class="nav-link">Routine</a></li>
	        	<li class="nav-item "><a href="teacher.php" class="nav-link" >Teachers</a></li>
	        	<li class="nav-item"><a href="application.php" class="nav-link"  >Application</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link" style="color:#FF7017;">Contact</a></li>
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
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<br>
     <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate" style="background-color:#97C71B">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center"  style="background-color:#97C71B">
            		<span class="flaticon"><img src="images/loc.png" alt="enviroment" width="50" height="50"></span>
              </div>
              <div class="media-body p-2 mt-3"  style="background-color:#97C71B">
                <h3 class="heading"><b>ADDRESS</b></h3>
                <p style="text-align:center; color:white">42 Himeville Dr, Bluewater Bay, Gqeberha, 6210, South Africa</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate" style="background-color:#7E0272">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center" style="background-color:#7E0272">
            		<span class="flaticon"><img src="images/call.png" alt="enviroment" width="50" height="50"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"><b>CONTACT</b></h3>
                <p style="text-align:center; color:white">If you have any questions feel free to contact us +27 83 454 0470</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate " style="background-color:#FF7017">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center" style="background-color:#FF7017">
            		<span class="flaticon"><img src="images/email.png" alt="enviroment" width="50" height="50"></span>
              </div>
              <div class="media-body p-2 mt-3" >
                <h3 class="heading"><b>EMAIL</b></h3>
                <p style="text-align:center; color:white">Any enquiries feel free to email us 
                emmanueldaycare80@gmail.com</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary"style="background-color:#97C71B">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center" style="background-color:#97C71B" >
            		<span class="flaticon"><img src="images/facebook.png" alt="enviroment" width="50" height="50"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"><b>FACEBOOK</b></h3>
                <p style="text-align:center; color:white">&nbsp; Go like and share our page &nbsp;&nbsp;&nbsp; Emmanuel Daycare Centre
				</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
   

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3196236370522!2d25.6298830152099!3d-33.85565278065984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e7ad51df1f69573%3A0xb7ddd6db22058c48!2sBluewater%20Emmanuel%20Daycare!5e0!3m2!1sen!2snl!4v1664620252390!5m2!1sen!2snl" 
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
		
		
		<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/head_strip.png);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 " style="background-color: #97C71B;">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	            <h2 class="mb-4">Enquiry</h2>
	            <p>If you have any question please leave us a message here</p>
	          </div>
	          <?php echo $Error; ?> 
	          <form action="contact.php" method = "post" class="appointment-form ftco-animate">

	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name ="sName" class="form-control" placeholder="Name" required>
		    				</div>
                <div class="form-group ml-md-4">
		    					<input type="name" name ="cNumber" class="form-control" placeholder="Contact number" required>
		    				</div>
                <div class="form-group ml-md-4">
		    					<input type="email" name ="senderEmail" class="form-control" placeholder="Email" required>
		    				</div>
	    				</div>
	    				
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name ="message" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
		            </div>
              </div>
		            <div class="form-group ml-md-4">
		              <!-- <input type="submit" name="mSend" class="btn btn-secondary py-3 px-4" style="background-color:#FF7017">
		             -->
                      <input type="submit" name="mSend" value="Send Message" class="btn btn-secondary py-3 px-4" />
                    </div>
              </div>
	    				</div>
	    			</form>
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