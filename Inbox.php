<?php

    session_start();
    if($_SESSION['admin'] == false){
      header("Location: Login.php");
    }
   
     require_once "DBConn.php";
     $Alert ="";
    
     $mess = "SELECT * FROM tblmessage";
     $mResult = $conn->query($mess);
 
     if ($mResult->num_rows > 0) { 
     
       $_SESSION['message'] = true;
     }
     else{
       $_SESSION['message'] = false;
     }


     if(isset( $_POST['mId'] ) ){

        $mId = $_POST['mId'];
        $query = "DELETE FROM tblmessage WHERE Message_ID = $mId";
        if ($conn->query($query) == TRUE) {
            $Alert ="Message deleted successfully";
        } else {
            $Alert  = "Error: " . $query . "<br>" . $conn->error. "<br>";
        }
        
    }

    ?>
      <!-- HTML CODE SECTION-->
      <html>
        <head>
            <title>Inbox</title>
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="assets/css/main.css" />
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
    <style>
        a {color: #7E0272;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #7E0272;
    text-decoration: underline; }
    body
    {
        color: #585858;
        width: 100%;
       
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    table {
border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ffffff;
  margin-right:50px;
  margin-left:50px;
}

tr {
        background-color: #97C71B;
        color: #7E0272;
        font-weight: bold;
        text-align: center;
    }



th{
padding: 10px;
border-bottom: 2px solid white;
font-size: 14px;
text-transform: uppercase;
letter-spacing: 0.03em;
vertical-align: baseline;
}

td {
padding: 8px;
border-bottom: 2px solid white;
}
.button {
display: inline-block;
padding: 15px 25px;
font-size: 14px;
cursor: pointer;
text-align: center;
text-decoration: none;
outline: none;
color: #fff;
background-color: #7E0272;;
border: none;
border-radius: 25px;
box-shadow: 0 5px #999;
text-transform: uppercase;
}

.button:hover {background-color: #7E0272;}

.button:active {
background-color: #7E0272;;
box-shadow: 0 5px #666;
transform: translateY(4px);
}

tr:hover {background-color: #97C71B;}
.hero-wrap.hero-wrap-2 {
            height: 300px;
        }

            .hero-wrap.hero-wrap-2 .slider-text {
                height: 300px;
            }

                .hero-wrap.hero-wrap-2 .slider-text .bread {
                    font-weight: 900;
                    color: #fff;
                }

                .hero-wrap.hero-wrap-2 .slider-text .breadcrumbs {
                    text-transform: uppercase;
                    font-size: 13px;
                    letter-spacing: 1px;
                }

                    .hero-wrap.hero-wrap-2 .slider-text .breadcrumbs span {
                        color: #fff;
                        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
                    }

                        .hero-wrap.hero-wrap-2 .slider-text .breadcrumbs span a {
                            color: #fff;
                        }
        </style>
  </head>
        
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
            <h1 class="mb-2 bread" style="text-align:center;"> Message Inbox</h1>
           
          </div>
        </div>
      </div>
    </section>
  <BR>
  <BR>
               
                
                
                <form action="Inbox.php" method= "post">
                <label style ="text-align: center" ><?php echo "$Alert" ?> </label>
				<div style="overflow-x:auto;"></div>			
                <table class="table" style="margin-right:100px;">
                    <tr style=" background-color: #fffff; color: white">
                        <!-- <th>Book Image</th> -->
                        
                        <th style=" background-color: #7E0272; color: white">Name</th>
                        <th style=" background-color: #7E0272; color: white">Contact Number</th>
                        <th style=" background-color: #7E0272; color: white">Message</th>
                        <th style=" background-color: #7E0272; color: white">Email</th>
                        <th style=" background-color: #7E0272; color: white">Date</th>
                        <th style=" background-color: #7E0272; color: white">&nbsp;</th>
                         <th style=" background-color:#ffffff; color: white">whitee</th>
                    </tr>
                        <?php 
                            $mess = "SELECT * FROM tblmessage";
                            $mResult = $conn->query($mess);
    
                            if ($mResult->num_rows > 0) { 
                            while($row = mysqli_fetch_assoc($mResult)){ ?>
                            <tr >
                                <td><?php echo $row['sName']; ?></td>
                                <td><?php echo $row['cNumber']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td><?php echo $row['senderEmail']; ?></td>
                                <td><?php echo $row['Date']; ?></td>
                                <td><form method='post'>
                                    <input type='hidden' name='mId' value='<?php echo $row['Message_ID']; ?> ' />
                                    <input type='submit' class="button" value="Delete Message"/>
                                </form> </td>
                                <td style=" background-color: #ffffff; color: white">vfvf</td>
                            </tr>
                    <?php } ?>
                    <?php } 
                    else {
                        $Alert = "No Messages";
                        } ?>
                </table>                           
    </div>
            </form>
        </div>  
        </div>
            </div>  
        </div>
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