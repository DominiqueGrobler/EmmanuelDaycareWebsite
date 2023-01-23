<?php

	session_start();
	 
  if (isset($_POST['LogOut']))
  {
   $_SESSION['admin'] = false;
  }
	require_once "DBConn.php";
    $Error="";
    //child details
    $cName = isset($_POST['cName'])?$_POST['cName']:'';
    $cSurname = isset($_POST['cSurname'])?$_POST['cSurname']:'';
    $cAge = isset($_POST['cAge'])?$_POST['cAge']:'';
    $cBdate = isset($_POST['cBdate'])?$_POST['cBdate']:'';
    $cAddress = isset($_POST['cAddress'])?$_POST['cAddress']:'';
    
    //mom details
    $mName = isset($_POST['mName'])?$_POST['mName']:'';
    $mSurname = isset($_POST['mSurname'])?$_POST['mSurname']:'';
    $mID = isset($_POST['mID'])?$_POST['mID']:'';
    $mOccupation = isset($_POST['mOccupation'])?$_POST['mOccupation']:'';
    $mCell = isset($_POST['mCell'])?$_POST['mCell']:'';
    $mWork = isset($_POST['mWork'])?$_POST['mWork']:'';
	  $mEmail= isset($_POST['mEmail'])?$_POST['mEmail']:'';
    
    //dad details
    $dName = isset($_POST['dName'])?$_POST['dName']:'';
    $dSurname = isset($_POST['dSurname'])?$_POST['dSurname']:'';
    $dID = isset($_POST['dID'])?$_POST['dID']:'';
    $dOccupation = isset($_POST['dOccupation'])?$_POST['dOccupation']:'';
    $dCell = isset($_POST['dCell'])?$_POST['dCell']:'';
    $dWork = isset($_POST['dWork'])?$_POST['dWork']:'';
	  $dEmail= isset($_POST['dEmail'])?$_POST['dEmail']:'';

    //doc detais
    $docName = isset($_POST['docName'])?$_POST['docName']:'';
	  $docNum= isset($_POST['docNum'])?$_POST['docNum']:'';

    //em1 details
    $emName1 = isset($_POST['emName1'])?$_POST['emName1']:'';
    $emSurname1 = isset($_POST['emSurname1'])?$_POST['emSurname1']:'';
    $emCell1 = isset($_POST['emCell1'])?$_POST['emCell1']:'';
    $emAddress1 = isset($_POST['emAddress1'])?$_POST['emAddress1']:'';

    //em2 details
    $emName2 = isset($_POST['emName2'])?$_POST['emName2']:'';
    $emSurname2 = isset($_POST['emSurname2'])?$_POST['emSurname2']:'';
    $emCell2 = isset($_POST['emCell2'])?$_POST['emCell2']:'';
    $emAddress2 = isset($_POST['emAddress2'])?$_POST['emAddress2']:'';

    //textFields
    $cAllergies = isset($_POST['cAllergies'])?$_POST['cAllergies']:'';
	  $cOperations = isset($_POST['cOperations'])?$_POST['cOperations']:'';
    if (isset($_POST['mNot']))
    {
      $mName = "N.A.";
      $mSurname = "N.A.";
      $mID = 0;
      $mOccupation = "N.A.";
      $mCell = "N.A.";
      $mWork = "N.A.";
      $mEmail="N.A.";
    }

    if (isset($_POST['dNot']))
    {
      $dName = "N.A.";
      $dSurname = "N.A.";
      $dID = 0;
      $dOccupation = "N.A.";
      $dCell = "N.A.";
      $dWork = "N.A.";
      $dEmail="N.A.";
    }

    if (isset($_POST['apply']))
    {

        //Insert into table  
     
		$sql = "INSERT INTO tblapplication (cName, cSurname, cAge, cBdate, cAddress,
     mName, mSurname, mID, mOccupation, mCell, mWork, mEmail,
     dName, dSurname, dID, dOccupation, dCell, dWork, dEmail,
     docName, docNum,
     emName1, emSurname1, emCell1, emAddress1,
     emName2, emSurname2, emCell2, emAddress2,
     cAllergies, cOperations)
		VALUES ('$cName', '$cSurname','$cAge', '$cBdate','$cAddress',
    '$mName', '$mSurname', '$mID','$mOccupation', '$mCell', '$mWork' , '$mEmail',
    '$dName', '$dSurname', '$dID','$dOccupation', '$dCell', '$dWork' , '$dEmail',
    '$docName', '$docNum',
    '$emName1', '$emSurname1', '$emCell1', '$emAddress1',
    '$emName2', '$emSurname2', '$emCell2', '$emAddress2',
    '$cAllergies', '$cOperations')";

		if ($conn->query($sql) == TRUE) {
		$Error ="New record created successfully";
		} else {
      $Error ="Error: " . $sql . "<br>" . $conn->error. "<br>";
		}
		$conn->close();

    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Child Application</title>
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
      label {
        display: block;
        
        padding-left: 15px;
        text-indent: -15px;
      }
      input[type=checkbox] {
        background:#97C71B ;
        width: 15px;
        height: 15px;
        padding: 0;
        margin: 0;
        vertical-align: bottom;
        position: relative;
        top: -4px;
      }
    </style>
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
	        	<li class="nav-item "><a href="index.php" class="nav-link ">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="routine.php" class="nav-link">Routine</a></li>
	        	<li class="nav-item "><a href="teacher.php" class="nav-link" >Teachers</a></li>
	        	<li class="nav-item"><a href="application.php" class="nav-link" style="color:#FF7017;" >Application</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php 	if($_SESSION['admin'] == true){?>
              <li class="nav-item"><a href="AppList.php" class="nav-link" >View App</a></li>

              <?php 	if($_SESSION['message'] == true){?>
                <li class="nav-item"><a href="Inbox.php" class="nav-link">Inbox</a></li>
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
            <h1 class="mb-2 bread" style="text-align:center;"> Child Application</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="application.php">Application <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section style="background-color:#97C71B;">
    <div class="testbox">
      <form action="child_application.php" method="post">
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
        </label><br/>
        <div style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;">
        <legend style="background-color:#7E0272; text-align: center;"> <b>Applicant Information</b></legend>
        </div> 
        </br>
        <div class="item">
          <p style="color:#97C71B";><B>CHILD'S DETAILS</B></p>
          <div class="name-item">
            <input type="text" name="cName" placeholder="Name" />
            <input type="text" name="cSurname" placeholder="Surname" />
          </div>
        </div>
        <div class="item">
          <input type="number" name="cAge" placeholder="Age"/>
        </div>
        <div class="item">
          <input type="text" name="cAddress" placeholder="Address"/>
        </div>
        <div class="item">
          <p>Birth Date</p>
          <input type="date" name="cBdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>

        <div class="item">
        </br>
       
          <p style="color:#FF7017";><B>1.PARENT DETAILS</B></p>
          <label>
         <input type="checkbox" name="mNot"/> <span style="color:#FF7017">Check if the first parent is not applicable</span>
        </label>
          <div class="name-item">
            <input type="text"  name="mName"  placeholder="Name" />
            <input type="text"  name="mSurname"  placeholder="Surname" />
          <input type="number" name="mID" placeholder="ID" />
          <input type="text" name="mOccupation" placeholder="Occupation" />
          <input  type="tel" pattern="[0-9]{10}" name="mCell" placeholder="Cellphone number" />
          <input type="tel" pattern="[0-9]{10}" name="mWork" placeholder="Work number" />
          <input type="email" name="mEmail" placeholder="Email" />
        </div>

        </br>
        <div class="item">
        
          <p style="color:#7E0272";><B>2. PARENT DETAILS</B></p>
          <label>
         <input type="checkbox" name="dNot"/> <span style="color:#7E0272">Check if the second parent is not applicable</span>
        </label>
          <div class="name-item">
          <input type="text"  name="dName"  placeholder="Name" />
            <input type="text"  name="dSurname"  placeholder="Surname" />
          <input type="number" name="dID" placeholder="ID" />
          <input type="text" name="dOccupation" placeholder="Occupation" />
          <input type="tel" pattern="[0-9]{10}" name="dCell" placeholder="Cellphone number" />
          <input type="tel" pattern="[0-9]{10}" name="dWork" placeholder="Work number" />
          <input type="email" name="dEmail" placeholder="Email" />
        </div>
        </br>
        <div style="background-color:#FF7017;color:white;padding:15px;border-radius: 5px;">
        <legend style="background-color:#FF7017; text-align: center;"> <b>Medical Information</b></legend>
        </div> 
          </br>
        <div class="item">
          <p style="color:#97C71B";><B>DOCTOR DETAILS</B></p>
          <div class="name-item">
            <input type="text" name="docName" placeholder="Doctor Name" required />
          <input type="tel" pattern="[0-9]{10}" name="docNum" placeholder="Doctor number" required/>
        </div>
        
        <div class="item">
          <p style="color:#7E0272";><B>EMERGENCY CONTACT 1</B></p>
          <div class="name-item">
            <input type="text" name="emName1" placeholder="Name" required/>
            <input type="text" name="emSurname1" placeholder="Surname" required/>
          <input type="tel" pattern="[0-9]{10}" name="emCell1" placeholder="Contact Number" required/>
          <input type="text" name="emAddress1" placeholder="Address" required/>
        </div>
        
        <div class="item">
          <p style="color:#7E0272";><B>EMERGENCY CONTACT 2</B></p>
          <div class="name-item">
          <input type="text" name="emName2" placeholder="Name" required/>
            <input type="text" name="emSurname2" placeholder="Surname" required/>
          <input type="tel" pattern="[0-9]{10}" name="emCell2" placeholder="Contact Number" required/>
          <input type="text" name="emAddress2" placeholder="Address" required/>
        </div>
        </br>
<div class="item">
        <p style="color:#FF7017";><B>OPERATIONS OR ALLERGIES</B></p>
          <p style="color: #666";>Does your child have any allergies?</p>
          <textarea rows="3" name ="cAllergies"></textarea>
        </div>
        <div class="item">
          <p style="color: #666";>Has your child have any operations?</p>
          <textarea rows="3" name ="cOperations"></textarea>
        </div>

        <div style="background-color:#7E0272;color:white;padding:15px;border-radius: 5px;">
        <legend style="background-color:#7E0272; text-align: center;"> <b>Terms & Conditions</b></legend>
        
        </div>
        </br> 
        <p style="color: #666; text-align:justify"> Fees are payable strictly in advance. Fees are payable over 12 months, therefore you have to pay from January to December. No 
late payments will be accepted. Late fee will incur a penalty fee. Fees are payable on 25/30th of every month. January fees are due 
by 15 December of every year. (Please pay on time) A late payment penalty of R200 will be charged. </p>
    </br>
    </br>
        
        <div class="btn-block">
          <button type="submit"  name="apply">Apply</button>
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