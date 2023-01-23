<?php

session_start();
if($_SESSION['admin'] == false){
  header("Location: Login.php");
}
if (isset($_POST['LogOut']))
{
 $_SESSION['admin'] = false;
}

	 
	require_once "DBConn.php";
    $Error="";
    if(isset( $_POST['del'] ) )
    {

      $query = "DELETE FROM tbltransport WHERE TransportID ='".$_SESSION['tAppID']."' ;";
      if ($conn->query($query) == TRUE) {
          $Alert ="Application deleted successfully";
          header("Location: AppList.php");
      } else {
          $Alert  = "Error: " . $query . "<br>" . $conn->error. "<br>";
      }
      
  }
        
    if (isset($_SESSION['appID']))
    {

        //Insert into table  
     
		$sql = "SELECT * FROM tbltransport WHERE TransportID ='".$_SESSION['tAppID']."' ;";
        $mResult = $conn->query($sql);
    
        if ($mResult->num_rows > 0) { 
        while($row = mysqli_fetch_assoc($mResult)){
		 //child details
         $cName = $row['cName'];
         $cSurname = $row['cSurname'];
         $cAge =  $row['cAge'];
         $cBdate = $row['cBdate'];
         $cAddress = $row['cAddress'];
         
      //mom details
         $mName = $row['mName'];
         $mSurname = $row['mSurname'];
         $mID = $row['mID'];
         $mOccupation = $row['mOccupation'];
         $mCell = $row['mCell'];
         $mWork = $row['mWork'];
         $mEmail= $row['mEmail'];
         
      //dad details
         $dName = $row['dName'];
         $dSurname = $row['dSurname'];
         $dID = $row['dID'];
         $dOccupation = $row['dOccupation'];
         $dCell = $row['dCell'];
         $dWork = $row['dWork'];
         $dEmail= $row['dEmail'];
     
		}
  
  } else {
		echo "Error: " . $sql . "<br>" . $conn->error. "<br>";
		}
		$conn->close();

    }


   

   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Transport Application</title>
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
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 80px;
      }
      form {
      width: 100%;
      padding: 50px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 10px 0 #666; 
      }
  
      p.top-info {
      margin: 10px 0;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #97C71B;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 8px 0 #97C71B;
      color: #97C71B;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio] {
      width: 0;
      visibility: hidden;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 25px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #97C71B;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 6px;
      left: 5px;
      background: transparent;
      border: 3px solid #97C71B;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #97C71B;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #97C71B;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
	  <div>
    	
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
					<li class="nav-item"><a href="Inbox.php" class="nav-link"  style="color:#FF7017;" >Inbox</a></li>
					<?php }    ?>

					<li class="nav-item"><a href="LogOut.php" class="nav-link">Logout</a> </li>
			
  
			  <?php }
			  else{?>
			  	<li class="nav-item "><a href="index.php" class="nav-link ">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="routine.php" class="nav-link">Routine</a></li>
	        	<li class="nav-item"><a href="application.php" class="nav-link"  >Application</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link"">Contact</a></li>
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
            <h1 class="mb-2 bread" style="text-align:center;"> Transport Application</h1>
           
          </div>
        </div>
      </div>
    </section>
		
		<section style="background-color:#97C71B;">
    <div class="testbox">
      <form action="TAppDetails.php" method ="post">
                <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="images/Emmanuel.png" alt="logo" width="120" height="120" >
          </p>
          <label>
          <?php echo $Error; ?> 
        </label>
        </br>
        <div style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;">
        <legend style="background-color:#7E0272; text-align: center;"> <b>Applicant Information</b></legend>
        </div> 
        </br>
          <div class="item">
          <p style="color:#97C71B";><B>CHILD'S DETAILS</B></p>
          <div class="name-item">
            <input type="text" value="<?php echo $cName; ?>" />
            <input type="text" value="<?php echo $cSurname; ?>"/>
          </div>
        </div>
        <div class="item">
          <input type="text" value="<?php echo $cAge; ?>"/>
        </div>
        <div class="item">
          <input type="text" value="<?php echo $cAddress; ?>"/>
        </div>
        <div class="item">
          <p>Birth Date</p>
          <input type="text" value="<?php echo $cBdate; ?>"/>
          </div>

        <div class="item">
          <p style="color:#FF7017";><B>1. PARENTS DETAILS</B></p>
       <label>
         <input type="checkbox" name="mNot"/> <span style="color:#FF7017">Check if the first parent is not applicable</span>
        </label>
          <div class="name-item">
            <input type="text"  value="<?php echo $mName; ?>" />
            <input type="text"  value="<?php echo $mSurname; ?>" />
          <input type="text" value="<?php echo $mID; ?>" />
          <input type="text" value="<?php echo $mOccupation; ?>"/>
          <input type="text" value="<?php echo $mCell; ?>" />
          <input type="text" value="<?php echo $mWork; ?>" />
          <input type="text" value="<?php echo $mEmail; ?>"/>
        </div>
       
         <div class="item">
      <p style="color:#FF7017";><B>2. PARENTS DETAILS</B></p>
       <label>
         <input type="checkbox" name="dNot"/> <span style="color:#FF7017">Check if the first parent is not applicable</span>
        </label>
          <div class="name-item">
          <input type="text"  value="<?php echo $dName; ?>" />
            <input type="text"  value="<?php echo $dSurname; ?>" />
          <input type="text" value="<?php echo $dID; ?>" />
          <input type="text" value="<?php echo $dOccupation; ?>"/>
          <input type="text" value="<?php echo $dCell; ?>" />
          <input type="text" value="<?php echo $dWork; ?>" />
          <input type="text" value="<?php echo $dEmail; ?>"/></div>

        <div class="btn-block">
          <button type="submit"  name="del">Delete</button>
        </div>
      </form>
    </div>
  </section>
    
  

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